2025-07-10 Version: 2.26.0
- Support API DescribeUrlObservationData.
- Update API CreateRoutineRoute: add request parameters Fallback.
- Update API GetEdgeContainerAppResourceStatus: add response parameters Body.Regions.$.IsOffline.
- Update API GetEdgeContainerAppResourceStatus: add response parameters Body.Regions.$.IsStaging.
- Update API GetRoutineRoute: add response parameters Body.Fallback.
- Update API ListRoutineRoutes: add response parameters Body.Configs.$.Fallback.
- Update API ListSiteRoutes: add response parameters Body.Configs.$.Fallback.
- Update API UpdateRoutineRoute: add request parameters Fallback.


2025-06-24 Version: 2.25.0
- Support API CreateUrlObservation.
- Support API DeleteUrlObservation.
- Support API ListESAIPInfo.
- Support API ListUrlObservations.
- Support API TagResources.
- Support API UpdateUrlObservation.
- Update API CreateSiteDeliveryTask: add request parameters FilterVer.
- Update API CreateSiteDeliveryTask: add request parameters HttpDelivery.LastLogSplit.
- Update API CreateSiteDeliveryTask: add request parameters HttpDelivery.LogSplit.
- Update API CreateSiteDeliveryTask: add request parameters HttpDelivery.LogSplitWords.
- Update API CreateUserDeliveryTask: add request parameters FilterVer.
- Update API GetSiteDeliveryTask: add response parameters Body.FilterVer.
- Update API GetSiteDeliveryTask: add response parameters Body.RawRule.
- Update API GetUserDeliveryTask: add response parameters Body.FilterVer.
- Update API GetUserDeliveryTask: add response parameters Body.RawRule.
- Update API UpdateSiteDeliveryTask: add request parameters FilterVer.
- Update API UpdateUserDeliveryTask: add request parameters FilterVer.


2025-06-16 Version: 2.24.1
- Update API CreateLoadBalancer: add request parameters Monitor.MonitoringRegion.
- Update API GetLoadBalancer: add response parameters Body.Monitor.MonitoringRegion.
- Update API ListLoadBalancers: add response parameters Body.LoadBalancers.$.Monitor.MonitoringRegion.
- Update API UpdateLoadBalancer: add request parameters Monitor.MonitoringRegion.


2025-06-10 Version: 2.24.0
- Support API CreateVideoProcessing.
- Support API DeleteVideoProcessing.
- Support API GetVideoProcessing.
- Support API ListVideoProcessings.
- Support API UpdateVideoProcessing.
- Update API UpdateRecord: add request parameters Type.


2025-06-03 Version: 2.23.1
- Update API CreateCustomScenePolicy: add request parameters SiteIds.
- Update API CreateCustomScenePolicy: add response parameters Body.SiteIds.
- Update API CreateHttpsApplicationConfiguration: add request parameters HttpsNoSniDeny.
- Update API CreateHttpsApplicationConfiguration: add request parameters HttpsSniVerify.
- Update API CreateHttpsApplicationConfiguration: add request parameters HttpsSniWhitelist.
- Update API DescribeCustomScenePolicies: add response parameters Body.DataModule.$.SiteIds.
- Update API GetHttpsApplicationConfiguration: add response parameters Body.HttpsNoSniDeny.
- Update API GetHttpsApplicationConfiguration: add response parameters Body.HttpsSniVerify.
- Update API GetHttpsApplicationConfiguration: add response parameters Body.HttpsSniWhitelist.
- Update API ListHttpsApplicationConfigurations: add response parameters Body.Configs.$.HttpsNoSniDeny.
- Update API ListHttpsApplicationConfigurations: add response parameters Body.Configs.$.HttpsSniVerify.
- Update API ListHttpsApplicationConfigurations: add response parameters Body.Configs.$.HttpsSniWhitelist.
- Update API UpdateCustomScenePolicy: add request parameters SiteIds.
- Update API UpdateCustomScenePolicy: add response parameters Body.SiteIds.
- Update API UpdateHttpsApplicationConfiguration: add request parameters HttpsNoSniDeny.
- Update API UpdateHttpsApplicationConfiguration: add request parameters HttpsSniVerify.
- Update API UpdateHttpsApplicationConfiguration: add request parameters HttpsSniWhitelist.


2025-05-21 Version: 2.23.0
- Support API DescribeSiteLogs.
- Support API OpenErService.
- Update API CreateRoutineRelatedRecord: add response parameters Body.RecordId.
- Update API GetManagedTransform: add response parameters Body.RealClientIpHeaderName.
- Update API UpdateManagedTransform: add request parameters RealClientIpHeaderName.


2025-05-08 Version: 2.22.0
- Support API ListRoutineCodeVersions.


2025-04-17 Version: 2.21.1
- Update API CreateOriginRule: add request parameters Follow302Enable.
- Update API CreateOriginRule: add request parameters Follow302MaxTries.
- Update API CreateOriginRule: add request parameters Follow302RetainArgs.
- Update API CreateOriginRule: add request parameters Follow302RetainHeader.
- Update API CreateOriginRule: add request parameters Follow302TargetHost.
- Update API GetOriginRule: add response parameters Body.Follow302Enable.
- Update API GetOriginRule: add response parameters Body.Follow302MaxTries.
- Update API GetOriginRule: add response parameters Body.Follow302RetainArgs.
- Update API GetOriginRule: add response parameters Body.Follow302RetainHeader.
- Update API GetOriginRule: add response parameters Body.Follow302TargetHost.
- Update API GetWafRule: add response parameters Body.RulesetId.
- Update API ListOriginRules: add response parameters Body.Configs.$.Follow302Enable.
- Update API ListOriginRules: add response parameters Body.Configs.$.Follow302MaxTries.
- Update API ListOriginRules: add response parameters Body.Configs.$.Follow302RetainArgs.
- Update API ListOriginRules: add response parameters Body.Configs.$.Follow302RetainHeader.
- Update API ListOriginRules: add response parameters Body.Configs.$.Follow302TargetHost.
- Update API UpdateOriginRule: add request parameters Follow302Enable.
- Update API UpdateOriginRule: add request parameters Follow302MaxTries.
- Update API UpdateOriginRule: add request parameters Follow302RetainArgs.
- Update API UpdateOriginRule: add request parameters Follow302RetainHeader.
- Update API UpdateOriginRule: add request parameters Follow302TargetHost.


2025-04-15 Version: 2.21.0
- Support API GetErService.
- Support API ListCertificatesByRecord.
- Support API ListRoutineRelatedRecords.
- Support API ListUserRoutines.
- Update API CreateHttpRequestHeaderModificationRule: add request parameters RequestHeaderModification.$.Type.
- Update API CreateHttpResponseHeaderModificationRule: add request parameters ResponseHeaderModification.$.Type.
- Update API GetHttpRequestHeaderModificationRule: add response parameters Body.RequestHeaderModification.$.Type.
- Update API GetHttpResponseHeaderModificationRule: add response parameters Body.ResponseHeaderModification.$.Type.
- Update API ListHttpRequestHeaderModificationRules: add response parameters Body.Configs.$.RequestHeaderModification.$.Type.
- Update API ListHttpResponseHeaderModificationRules: add response parameters Body.Configs.$.ResponseHeaderModification.$.Type.
- Update API ListWafTemplateRules: add request parameters QueryArgs.Kinds.
- Update API RollbackEdgeContainerAppVersion: add request parameters Percentage.
- Update API RollbackEdgeContainerAppVersion: add request parameters UsedPercent.
- Update API UpdateHttpRequestHeaderModificationRule: add request parameters RequestHeaderModification.$.Type.
- Update API UpdateHttpResponseHeaderModificationRule: add request parameters ResponseHeaderModification.$.Type.


2025-04-07 Version: 2.20.0
- Support API CreateRoutineRoute.
- Support API DeleteRoutineRoute.
- Support API GetRoutineRoute.
- Support API ListRoutineRoutes.
- Support API ListSiteRoutes.
- Support API UpdateRoutineRoute.


2025-04-02 Version: 2.19.0
- Support API DescribeSiteTimeSeriesData.
- Support API DescribeSiteTopData.


2025-04-01 Version: 2.18.0
- Support API GetEdgeContainerAppResourceStatus.
- Update API CreateOriginRule: add request parameters OriginReadTimeout.
- Update API GetOriginRule: add response parameters Body.OriginReadTimeout.
- Update API ListOriginRules: add response parameters Body.Configs.$.OriginReadTimeout.
- Update API UpdateOriginRule: add request parameters OriginReadTimeout.


2025-03-31 Version: 2.17.0
- Support API BatchCreateWafRules.
- Support API BatchUpdateWafRules.
- Support API CreateWafRule.
- Support API CreateWafRuleset.
- Support API DeleteOriginCaCertificate.
- Support API DeleteOriginClientCertificate.
- Support API DeleteSiteOriginClientCertificate.
- Support API DeleteWafRule.
- Support API DeleteWafRuleset.
- Support API GetCrossBorderOptimization.
- Support API GetOriginCaCertificate.
- Support API GetOriginClientCertificate.
- Support API GetOriginClientCertificateHostnames.
- Support API GetSiteOriginClientCertificate.
- Support API GetWafRule.
- Support API GetWafRuleset.
- Support API ListOriginCaCertificates.
- Support API ListOriginClientCertificates.
- Support API ListWafRules.
- Support API ListWafRulesets.
- Support API SetOriginClientCertificateHostnames.
- Support API UpdateCrossBorderOptimization.
- Support API UpdateWafRule.
- Support API UpdateWafRuleset.
- Support API UploadOriginCaCertificate.
- Support API UploadOriginClientCertificate.
- Support API UploadSiteOriginClientCertificate.
- Update API CreateCacheRule: add request parameters Sequence.
- Update API CreateCompressionRule: add request parameters Sequence.
- Update API CreateHttpRequestHeaderModificationRule: add request parameters Sequence.
- Update API CreateHttpResponseHeaderModificationRule: add request parameters Sequence.
- Update API CreateHttpsApplicationConfiguration: add request parameters Sequence.
- Update API CreateHttpsBasicConfiguration: add request parameters Sequence.
- Update API CreateImageTransform: add request parameters Sequence.
- Update API CreateNetworkOptimization: add request parameters Sequence.
- Update API CreateOriginRule: add request parameters Sequence.
- Update API CreateRedirectRule: add request parameters Sequence.
- Update API CreateRewriteUrlRule: add request parameters Sequence.
- Update API GetIPv6: add response parameters Body.Region.
- Update API UpdateCacheRule: add request parameters Sequence.
- Update API UpdateCompressionRule: add request parameters Sequence.
- Update API UpdateHttpRequestHeaderModificationRule: add request parameters Sequence.
- Update API UpdateHttpResponseHeaderModificationRule: add request parameters Sequence.
- Update API UpdateHttpsApplicationConfiguration: add request parameters Sequence.
- Update API UpdateHttpsBasicConfiguration: add request parameters Sequence.
- Update API UpdateIPv6: add request parameters Region.
- Update API UpdateImageTransform: add request parameters Sequence.
- Update API UpdateNetworkOptimization: add request parameters Sequence.
- Update API UpdateOriginRule: add request parameters Sequence.
- Update API UpdateRedirectRule: add request parameters Sequence.
- Update API UpdateRewriteUrlRule: add request parameters Sequence.


2025-03-20 Version: 2.16.1
- Update API CreateOriginRule: add param RangeChunkSize.
- Update API GetOriginRule: update response param.
- Update API ListOriginRules: update response param.
- Update API UpdateOriginRule: add param RangeChunkSize.


2025-03-20 Version: 2.16.0
- Support API GetEdgeContainerAppResourceReserve.
- Support API PurchaseCacheReserve.
- Support API UpdateCacheReserveSpec.
- Support API UpdateEdgeContainerAppResourceReserve.
- Update API CreateRoutine: update param SpecName.
- Update API GetRoutine: update response param.
- Update API ListScheduledPreloadJobs: update response param.
- Update API SetClientCertificateHostnames: update response param.


2025-03-01 Version: 2.15.3
- Generated php 2024-09-10 for ESA.

2025-02-28 Version: 2.15.3
- Update API CreateSiteDeliveryTask: update response param.


2025-01-10 Version: 2.10.3
- Update API ListUserRatePlanInstances: update response param.


2025-01-10 Version: 2.10.3
- Update API ListUserRatePlanInstances: update response param.


2025-01-09 Version: 2.10.2
- Update API ListPages: add param QueryArgs.
- Update API SetCertificate: update response param.


2025-01-09 Version: 2.10.2
- Update API ListPages: add param QueryArgs.
- Update API SetCertificate: update response param.


2025-01-09 Version: 2.10.1
- Generated php 2024-09-10 for ESA.

2025-01-09 Version: 2.9.1
- Generated php 2024-09-10 for ESA.

2025-01-09 Version: 2.9.1
- Generated php 2024-09-10 for ESA.

2025-01-09 Version: 2.9.1
- Generated php 2024-09-10 for ESA.

2025-01-06 Version: 2.9.0
- Support API DescribeDDoSBpsList.
- Support API DescribeDDoSL7QpsList.


2024-12-27 Version: 2.8.0
- Support API ApplyCertificate.
- Support API CreateOriginPool.
- Support API DeleteOriginPool.
- Support API GetCertificate.
- Support API GetOriginPool.
- Support API ListCertificates.
- Support API ListOriginPools.
- Support API UpdateOriginPool.
- Update API CreateUserDeliveryTask: add param Details.
- Update API GetOriginProtection: update param SiteId.
- Update API GetUserDeliveryTask: update response param.
- Update API UpdatePage: update param Description.
- Update API UpdateUserDeliveryTask: add param Details.


2024-12-24 Version: 2.7.6
- Update API GetOriginProtection: update param SiteId.


2024-12-24 Version: 2.7.6
- Update API GetOriginProtection: update param SiteId.


2024-12-20 Version: 2.7.5
- Generated php 2024-09-10 for ESA.

2024-12-19 Version: 2.7.4
- Update API GetSiteWafSettings: add param Path.


2024-12-12 Version: 2.7.4
- Update API GetSiteWafSettings: add param Path.
- Update API ListWafRules: update param QueryArgs.


2024-12-07 Version: 2.7.3
- Generated php 2024-09-10 for ESA.

2024-12-06 Version: 2.7.2
- Update API PurgeCaches: update param SiteId.
- Update API PurgeCaches: update param Type.


2024-12-05 Version: 2.7.1
- Update API CommitRoutineStagingCode: update param Name.
- Update API CreateRoutine: update param Description.
- Update API CreateRoutine: update param Name.
- Update API CreateRoutine: update param SpecName.
- Update API CreateRoutineRelatedRecord: update param Name.
- Update API CreateRoutineRelatedRecord: update param RecordName.
- Update API CreateRoutineRelatedRecord: update param SiteId.
- Update API CreateRoutineRelatedRoute: add param ByPass.
- Update API CreateRoutineRelatedRoute: update param Name.
- Update API CreateRoutineRelatedRoute: update param Route.
- Update API CreateRoutineRelatedRoute: update param SiteId.
- Update API DeleteRoutine: update param Name.
- Update API DeleteRoutineCodeVersion: update param CodeVersion.
- Update API DeleteRoutineCodeVersion: update param Name.
- Update API DeleteRoutineRelatedRecord: update param Name.
- Update API DeleteRoutineRelatedRecord: update param RecordId.
- Update API DeleteRoutineRelatedRecord: update param RecordName.
- Update API DeleteRoutineRelatedRecord: update param SiteId.
- Update API DeleteRoutineRelatedRoute: update param Name.
- Update API DeleteRoutineRelatedRoute: update param Route.
- Update API DeleteRoutineRelatedRoute: update param RouteId.
- Update API DeleteRoutineRelatedRoute: update param SiteId.
- Update API GetRoutine: update param Name.
- Update API GetRoutine: update response param.
- Update API GetRoutineStagingCodeUploadInfo: update param Name.
- Update API PublishRoutineCodeVersion: update param Env.
- Update API PublishRoutineCodeVersion: update param Name.


2024-12-02 Version: 2.7.0
- Support API GetClientCertificateHostnames.
- Support API SetClientCertificateHostnames.


2024-11-29 Version: 2.6.0
- Support API CreateClientCertificate.
- Support API CreateSiteFunction.
- Support API DeleteCertificate.
- Support API DeleteClientCaCertificate.
- Support API DeleteClientCertificate.
- Support API DeleteSiteFunction.
- Support API GetCertificateQuota.
- Support API GetClientCaCertificate.
- Support API GetClientCertificate.
- Support API ListCiphers.
- Support API ListClientCaCertificates.
- Support API ListSiteFunctions.
- Support API RevokeClientCertificate.
- Support API UpdateSiteFunction.
- Support API UploadClientCaCertificate.
- Update API ListSites: add param OrderBy.
- Update API ListSites: update response param.
- Update API ListUserRatePlanInstances: add param RemainingExpireDays.


2024-11-21 Version: 2.5.0
- Support API CreateOriginProtection.
- Support API DeleteOriginProtection.
- Support API GetOriginProtection.
- Support API UpdateOriginProtection.
- Support API UpdateOriginProtectionIpWhiteList.


2024-11-21 Version: 2.5.0
- Support API CreateOriginProtection.
- Support API DeleteOriginProtection.
- Support API GetOriginProtection.
- Support API UpdateOriginProtection.
- Support API UpdateOriginProtectionIpWhiteList.


2024-11-20 Version: 2.4.6
- Generated php 2024-09-10 for ESA.

2024-11-19 Version: 2.4.5
- Update API DescribeDDoSAllEventList: update response param.


2024-11-19 Version: 2.4.4
- Update API ListRecords: update param Proxied.


2024-11-13 Version: 2.4.3
- Update API BatchCreateRecords: update param RecordList.
- Update API CreateScheduledPreloadExecutions: update param Executions.
- Update API GetEdgeContainerAppVersion: update response param.
- Update API ListEdgeContainerAppVersions: update response param.
- Update API ListUserRatePlanInstances: update response param.
- Update API ListWafManagedRules: add param ProtectionLevel.
- Update API ListWafManagedRules: update param QueryArgs.
- Update API ListWafTemplateRules: add param SiteId.


2024-11-08 Version: 2.4.2
- Generated php 2024-09-10 for ESA.

2024-11-06 Version: 2.4.1
- Generated php 2024-09-10 for ESA.

2024-10-28 Version: 2.4.0
- Support API CreateEdgeContainerApp.
- Support API CreateEdgeContainerAppRecord.
- Support API CreateEdgeContainerAppVersion.
- Support API DeleteEdgeContainerApp.
- Support API DeleteEdgeContainerAppRecord.
- Support API DeleteEdgeContainerAppVersion.
- Support API GetEdgeContainerApp.
- Support API GetEdgeContainerAppStatus.
- Support API GetEdgeContainerAppVersion.
- Support API GetEdgeContainerDeployRegions.
- Support API GetEdgeContainerLogs.
- Support API GetEdgeContainerStagingDeployStatus.
- Support API GetEdgeContainerTerminal.
- Support API ListEdgeContainerAppVersions.
- Support API PublishEdgeContainerAppVersion.
- Support API RebuildEdgeContainerAppStagingEnv.
- Support API RollbackEdgeContainerAppVersion.


2024-10-18 Version: 2.3.1
- Update API CreateSiteDeliveryTask: update param DiscardRate.
- Update API CreateSiteDeliveryTask: update param SiteId.


2024-10-16 Version: 2.3.0
- Support API CommitRoutineStagingCode.
- Support API CreateRoutine.
- Support API CreateRoutineRelatedRecord.
- Support API CreateRoutineRelatedRoute.
- Support API DeleteRoutine.
- Support API DeleteRoutineCodeVersion.
- Support API DeleteRoutineRelatedRecord.
- Support API DeleteRoutineRelatedRoute.
- Support API GetErService.
- Support API GetRoutine.
- Support API GetRoutineStagingCodeUploadInfo.
- Support API GetRoutineStagingEnvIp.
- Support API GetRoutineUserInfo.
- Support API ListRoutineCanaryAreas.
- Support API ListRoutineOptionalSpecs.
- Support API PublishRoutineCodeVersion.


2024-10-12 Version: 2.2.0
- Support API ListClientCertificates.


2024-10-11 Version: 2.1.0
- Support API DeleteKv.
- Support API DeleteKvNamespace.
- Support API DescribeKvAccountStatus.
- Support API GetKv.
- Support API GetKvAccount.


2024-10-11 Version: 2.0.1
- Update API CreateRecord: update param HostPolicy.
- Update API UpdateRecord: update param HostPolicy.


2024-10-10 Version: 2.0.0
- Support API GetCacheReserveSpecification.
- Support API ListCacheReserveInstances.
- Support API ListEdgeContainerApps.
- Support API ListEdgeRoutinePlans.
- Support API ListInstanceQuotas.
- Support API ListInstanceQuotasWithUsage.
- Support API ListUserRatePlanInstances.
- Support API ListWafManagedRules.
- Delete API AddUserBusinessForm.
- Delete API AdvancePurgeObjectCache.
- Delete API PutKvAccount.
- Update API SetCertificate: update param SiteId.


2024-10-08 Version: 1.0.0
- Generated php 2024-09-10 for ESA.

