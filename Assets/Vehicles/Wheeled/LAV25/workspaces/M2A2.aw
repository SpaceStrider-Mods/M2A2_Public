BaseSource {
 AnimSetTemplate "{968D52F76BB570C9}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25.ast"
 AnimSetInstances {
  "{7F0306C8DC7B6893}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25_vehicle.asi"
  "{4D3CA2D353C4FB44}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25_player.asi"
  "{7E526C0B3A740DF2}Assets/Vehicles/Wheeled/LAV25/workspaces/M2A2_vehicle.asi"
 }
 AnimGraph "{847F34F75C70A43A}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25.agr"
 PreviewModels {
  AnimSrcWorkspacePreviewModel "{6056956E70B64B68}" {
   Model "{790CB9C809DE64B8}Assets/Characters/Animation/AnimTestChar_US_01.xob"
  }
  AnimSrcWorkspacePreviewModel "{6070A32FC79263AD}" {
   Model "{D068C619231F3342}Assets/Vehicles/Wheeled/LAV25/LAV25_base.xob"
  }
  AnimSrcWorkspacePreviewModel "{6072D6A53595D893}" {
   Model "{32F27DBE1E6763C3}Assets/Vehicles/Wheeled/LAV25/LAV25_turret.xob"
  }
 }
 ChildPreviewModels {
  AnimSrcWorkspaceChildPreviewModel "{614ED56C15A48FA8}" {
   Enabled 1
   Model "{32F27DBE1E6763C3}Assets/Vehicles/Wheeled/LAV25/LAV25_turret.xob"
   Bone "v_turret_slot"
   Parent "{6070A32FC79263AD}"
  }
 }
 AudioTesting AnimSrcWorkspaceAudioTesting "{6056956E70B8563B}" {
 }
 AttachmentTesting AnimSrcWorkspaceAttachmentTesting "{6056956E70B85601}" {
 }
 IkTesting AnimSrcWorkspaceIkTesting "{6056956E70B85630}" {
 }
}