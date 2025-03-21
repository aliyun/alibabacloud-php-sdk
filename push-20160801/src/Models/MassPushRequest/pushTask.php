<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\MassPushRequest;

use AlibabaCloud\Tea\Model;

class pushTask extends Model
{
    /**
     * @example com.alibaba.cloudpushdemo.bizactivity
     *
     * @var string
     */
    public $androidActivity;

    /**
     * @example 99
     *
     * @var int
     */
    public $androidBadgeAddNum;

    /**
     * @var string
     */
    public $androidBadgeClass;

    /**
     * @example 99
     *
     * @var int
     */
    public $androidBadgeSetNum;

    /**
     * @var string
     */
    public $androidBigBody;

    /**
     * @example https://imag.example.com/image.png
     *
     * @var string
     */
    public $androidBigPictureUrl;

    /**
     * @var string
     */
    public $androidBigTitle;

    /**
     * @example {"key1":"value1","api_name":"PushNoticeToAndroidRequest"}
     *
     * @var string
     */
    public $androidExtParameters;

    /**
     * @var int
     */
    public $androidHonorTargetUserType;

    /**
     * @example RCP4C123456
     *
     * @var string
     */
    public $androidHuaweiReceiptId;

    /**
     * @example 1
     *
     * @var int
     */
    public $androidHuaweiTargetUserType;

    /**
     * @example https://imag.example.com/image.png
     *
     * @var string
     */
    public $androidImageUrl;

    /**
     * @var string
     */
    public $androidInboxBody;

    /**
     * @example VOIP
     *
     * @var string
     */
    public $androidMessageHuaweiCategory;

    /**
     * @example HIGH
     *
     * @var string
     */
    public $androidMessageHuaweiUrgency;

    /**
     * @var string
     */
    public $androidMessageOppoCategory;

    /**
     * @var int
     */
    public $androidMessageOppoNotifyLevel;

    /**
     * @example TODO
     *
     * @var string
     */
    public $androidMessageVivoCategory;

    /**
     * @var string
     */
    public $androidMusic;

    /**
     * @example 0
     *
     * @var int
     */
    public $androidNotificationBarPriority;

    /**
     * @example 2
     *
     * @var int
     */
    public $androidNotificationBarType;

    /**
     * @example 1
     *
     * @var string
     */
    public $androidNotificationChannel;

    /**
     * @example group-1
     *
     * @var string
     */
    public $androidNotificationGroup;

    /**
     * @example LOW
     *
     * @var string
     */
    public $androidNotificationHonorChannel;

    /**
     * @example LOW
     *
     * @var string
     */
    public $androidNotificationHuaweiChannel;

    /**
     * @example 100001
     *
     * @var int
     */
    public $androidNotificationNotifyId;

    /**
     * @var string
     */
    public $androidNotificationThreadId;

    /**
     * @example 0
     *
     * @var string
     */
    public $androidNotificationVivoChannel;

    /**
     * @example michannel
     *
     * @var string
     */
    public $androidNotificationXiaomiChannel;

    /**
     * @example VIBRATE
     *
     * @var string
     */
    public $androidNotifyType;

    /**
     * @example APPLICATION
     *
     * @var string
     */
    public $androidOpenType;

    /**
     * @example https://xxxx.xxx
     *
     * @var string
     */
    public $androidOpenUrl;

    /**
     * @example com.alibaba.cloudpushdemo.bizactivity
     *
     * @var string
     */
    public $androidPopupActivity;

    /**
     * @example hello
     *
     * @var string
     */
    public $androidPopupBody;

    /**
     * @example hello
     *
     * @var string
     */
    public $androidPopupTitle;

    /**
     * @example true
     *
     * @var bool
     */
    public $androidRemind;

    /**
     * @example 1
     *
     * @var string
     */
    public $androidRenderStyle;

    /**
     * @var int
     */
    public $androidTargetUserType;

    /**
     * @example 1
     *
     * @var int
     */
    public $androidVivoPushMode;

    /**
     * @var string
     */
    public $androidVivoReceiptId;

    /**
     * @deprecated
     *
     * @var string
     */
    public $androidXiaoMiActivity;

    /**
     * @deprecated
     *
     * @var string
     */
    public $androidXiaoMiNotifyBody;

    /**
     * @deprecated
     *
     * @var string
     */
    public $androidXiaoMiNotifyTitle;

    /**
     * @example https://f6.market.xiaomi.com/download/MiPass/aaa/bbb.png
     *
     * @deprecated
     *
     * @var string
     */
    public $androidXiaomiBigPictureUrl;

    /**
     * @example https://imag.example.com/image.png
     *
     * @deprecated
     *
     * @var string
     */
    public $androidXiaomiImageUrl;

    /**
     * @example hello
     *
     * @var string
     */
    public $body;

    /**
     * @description This parameter is required.
     *
     * @example ALL
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 2019-02-20T00:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $harmonyAction;

    /**
     * @var string
     */
    public $harmonyActionType;

    /**
     * @var int
     */
    public $harmonyBadgeAddNum;

    /**
     * @var int
     */
    public $harmonyBadgeSetNum;

    /**
     * @var string
     */
    public $harmonyCategory;

    /**
     * @var string
     */
    public $harmonyExtParameters;

    /**
     * @var string
     */
    public $harmonyExtensionExtraData;

    /**
     * @var bool
     */
    public $harmonyExtensionPush;

    /**
     * @var string
     */
    public $harmonyImageUrl;

    /**
     * @var string
     */
    public $harmonyInboxContent;

    /**
     * @var string
     */
    public $harmonyNotificationSlotType;

    /**
     * @var int
     */
    public $harmonyNotifyId;

    /**
     * @var string
     */
    public $harmonyReceiptId;

    /**
     * @var bool
     */
    public $harmonyRemind;

    /**
     * @var string
     */
    public $harmonyRemindBody;

    /**
     * @var string
     */
    public $harmonyRemindTitle;

    /**
     * @var string
     */
    public $harmonyRenderStyle;

    /**
     * @var bool
     */
    public $harmonyTestMessage;

    /**
     * @var string
     */
    public $harmonyUri;

    /**
     * @example 123
     *
     * @var string
     */
    public $jobKey;

    /**
     * @example 2019-02-20T00:00:00Z
     *
     * @var string
     */
    public $pushTime;

    /**
     * @description This parameter is required.
     *
     * @example MESSAGE
     *
     * @var string
     */
    public $pushType;

    /**
     * @example accs,huawei,xiaomi
     *
     * @var string
     */
    public $sendChannels;

    /**
     * @example 0
     *
     * @deprecated
     *
     * @var int
     */
    public $sendSpeed;

    /**
     * @example true
     *
     * @var bool
     */
    public $storeOffline;

    /**
     * @description This parameter is required.
     *
     * @example DEVICE
     *
     * @var string
     */
    public $target;

    /**
     * @description This parameter is required.
     *
     * @example deviceid1,deviceid2
     *
     * @var string
     */
    public $targetValue;

    /**
     * @example title
     *
     * @var string
     */
    public $title;

    /**
     * @example false
     *
     * @var bool
     */
    public $trim;

    /**
     * @example DEV
     *
     * @var string
     */
    public $iOSApnsEnv;

    /**
     * @example 0
     *
     * @var int
     */
    public $iOSBadge;

    /**
     * @example true
     *
     * @var bool
     */
    public $iOSBadgeAutoIncrement;

    /**
     * @example {“attachment”: “https://xxxx.xxx/notification_pic.png"}
     *
     * @var string
     */
    public $iOSExtParameters;

    /**
     * @example active
     *
     * @var string
     */
    public $iOSInterruptionLevel;

    /**
     * @var string
     */
    public $iOSLiveActivityAttributes;

    /**
     * @var string
     */
    public $iOSLiveActivityAttributesType;

    /**
     * @var string
     */
    public $iOSLiveActivityContentState;

    /**
     * @var int
     */
    public $iOSLiveActivityDismissalDate;

    /**
     * @var string
     */
    public $iOSLiveActivityEvent;

    /**
     * @var string
     */
    public $iOSLiveActivityId;

    /**
     * @var int
     */
    public $iOSLiveActivityStaleDate;

    /**
     * @example ””
     *
     * @var string
     */
    public $iOSMusic;

    /**
     * @example true
     *
     * @var bool
     */
    public $iOSMutableContent;

    /**
     * @example ios
     *
     * @var string
     */
    public $iOSNotificationCategory;

    /**
     * @example ZD2011
     *
     * @var string
     */
    public $iOSNotificationCollapseId;

    /**
     * @example abc
     *
     * @var string
     */
    public $iOSNotificationThreadId;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $iOSRelevanceScore;

    /**
     * @example true
     *
     * @var bool
     */
    public $iOSRemind;

    /**
     * @var string
     */
    public $iOSRemindBody;

    /**
     * @example true
     *
     * @var bool
     */
    public $iOSSilentNotification;

    /**
     * @example subtitle
     *
     * @var string
     */
    public $iOSSubtitle;
    protected $_name = [
        'androidActivity' => 'AndroidActivity',
        'androidBadgeAddNum' => 'AndroidBadgeAddNum',
        'androidBadgeClass' => 'AndroidBadgeClass',
        'androidBadgeSetNum' => 'AndroidBadgeSetNum',
        'androidBigBody' => 'AndroidBigBody',
        'androidBigPictureUrl' => 'AndroidBigPictureUrl',
        'androidBigTitle' => 'AndroidBigTitle',
        'androidExtParameters' => 'AndroidExtParameters',
        'androidHonorTargetUserType' => 'AndroidHonorTargetUserType',
        'androidHuaweiReceiptId' => 'AndroidHuaweiReceiptId',
        'androidHuaweiTargetUserType' => 'AndroidHuaweiTargetUserType',
        'androidImageUrl' => 'AndroidImageUrl',
        'androidInboxBody' => 'AndroidInboxBody',
        'androidMessageHuaweiCategory' => 'AndroidMessageHuaweiCategory',
        'androidMessageHuaweiUrgency' => 'AndroidMessageHuaweiUrgency',
        'androidMessageOppoCategory' => 'AndroidMessageOppoCategory',
        'androidMessageOppoNotifyLevel' => 'AndroidMessageOppoNotifyLevel',
        'androidMessageVivoCategory' => 'AndroidMessageVivoCategory',
        'androidMusic' => 'AndroidMusic',
        'androidNotificationBarPriority' => 'AndroidNotificationBarPriority',
        'androidNotificationBarType' => 'AndroidNotificationBarType',
        'androidNotificationChannel' => 'AndroidNotificationChannel',
        'androidNotificationGroup' => 'AndroidNotificationGroup',
        'androidNotificationHonorChannel' => 'AndroidNotificationHonorChannel',
        'androidNotificationHuaweiChannel' => 'AndroidNotificationHuaweiChannel',
        'androidNotificationNotifyId' => 'AndroidNotificationNotifyId',
        'androidNotificationThreadId' => 'AndroidNotificationThreadId',
        'androidNotificationVivoChannel' => 'AndroidNotificationVivoChannel',
        'androidNotificationXiaomiChannel' => 'AndroidNotificationXiaomiChannel',
        'androidNotifyType' => 'AndroidNotifyType',
        'androidOpenType' => 'AndroidOpenType',
        'androidOpenUrl' => 'AndroidOpenUrl',
        'androidPopupActivity' => 'AndroidPopupActivity',
        'androidPopupBody' => 'AndroidPopupBody',
        'androidPopupTitle' => 'AndroidPopupTitle',
        'androidRemind' => 'AndroidRemind',
        'androidRenderStyle' => 'AndroidRenderStyle',
        'androidTargetUserType' => 'AndroidTargetUserType',
        'androidVivoPushMode' => 'AndroidVivoPushMode',
        'androidVivoReceiptId' => 'AndroidVivoReceiptId',
        'androidXiaoMiActivity' => 'AndroidXiaoMiActivity',
        'androidXiaoMiNotifyBody' => 'AndroidXiaoMiNotifyBody',
        'androidXiaoMiNotifyTitle' => 'AndroidXiaoMiNotifyTitle',
        'androidXiaomiBigPictureUrl' => 'AndroidXiaomiBigPictureUrl',
        'androidXiaomiImageUrl' => 'AndroidXiaomiImageUrl',
        'body' => 'Body',
        'deviceType' => 'DeviceType',
        'expireTime' => 'ExpireTime',
        'harmonyAction' => 'HarmonyAction',
        'harmonyActionType' => 'HarmonyActionType',
        'harmonyBadgeAddNum' => 'HarmonyBadgeAddNum',
        'harmonyBadgeSetNum' => 'HarmonyBadgeSetNum',
        'harmonyCategory' => 'HarmonyCategory',
        'harmonyExtParameters' => 'HarmonyExtParameters',
        'harmonyExtensionExtraData' => 'HarmonyExtensionExtraData',
        'harmonyExtensionPush' => 'HarmonyExtensionPush',
        'harmonyImageUrl' => 'HarmonyImageUrl',
        'harmonyInboxContent' => 'HarmonyInboxContent',
        'harmonyNotificationSlotType' => 'HarmonyNotificationSlotType',
        'harmonyNotifyId' => 'HarmonyNotifyId',
        'harmonyReceiptId' => 'HarmonyReceiptId',
        'harmonyRemind' => 'HarmonyRemind',
        'harmonyRemindBody' => 'HarmonyRemindBody',
        'harmonyRemindTitle' => 'HarmonyRemindTitle',
        'harmonyRenderStyle' => 'HarmonyRenderStyle',
        'harmonyTestMessage' => 'HarmonyTestMessage',
        'harmonyUri' => 'HarmonyUri',
        'jobKey' => 'JobKey',
        'pushTime' => 'PushTime',
        'pushType' => 'PushType',
        'sendChannels' => 'SendChannels',
        'sendSpeed' => 'SendSpeed',
        'storeOffline' => 'StoreOffline',
        'target' => 'Target',
        'targetValue' => 'TargetValue',
        'title' => 'Title',
        'trim' => 'Trim',
        'iOSApnsEnv' => 'iOSApnsEnv',
        'iOSBadge' => 'iOSBadge',
        'iOSBadgeAutoIncrement' => 'iOSBadgeAutoIncrement',
        'iOSExtParameters' => 'iOSExtParameters',
        'iOSInterruptionLevel' => 'iOSInterruptionLevel',
        'iOSLiveActivityAttributes' => 'iOSLiveActivityAttributes',
        'iOSLiveActivityAttributesType' => 'iOSLiveActivityAttributesType',
        'iOSLiveActivityContentState' => 'iOSLiveActivityContentState',
        'iOSLiveActivityDismissalDate' => 'iOSLiveActivityDismissalDate',
        'iOSLiveActivityEvent' => 'iOSLiveActivityEvent',
        'iOSLiveActivityId' => 'iOSLiveActivityId',
        'iOSLiveActivityStaleDate' => 'iOSLiveActivityStaleDate',
        'iOSMusic' => 'iOSMusic',
        'iOSMutableContent' => 'iOSMutableContent',
        'iOSNotificationCategory' => 'iOSNotificationCategory',
        'iOSNotificationCollapseId' => 'iOSNotificationCollapseId',
        'iOSNotificationThreadId' => 'iOSNotificationThreadId',
        'iOSRelevanceScore' => 'iOSRelevanceScore',
        'iOSRemind' => 'iOSRemind',
        'iOSRemindBody' => 'iOSRemindBody',
        'iOSSilentNotification' => 'iOSSilentNotification',
        'iOSSubtitle' => 'iOSSubtitle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidActivity) {
            $res['AndroidActivity'] = $this->androidActivity;
        }
        if (null !== $this->androidBadgeAddNum) {
            $res['AndroidBadgeAddNum'] = $this->androidBadgeAddNum;
        }
        if (null !== $this->androidBadgeClass) {
            $res['AndroidBadgeClass'] = $this->androidBadgeClass;
        }
        if (null !== $this->androidBadgeSetNum) {
            $res['AndroidBadgeSetNum'] = $this->androidBadgeSetNum;
        }
        if (null !== $this->androidBigBody) {
            $res['AndroidBigBody'] = $this->androidBigBody;
        }
        if (null !== $this->androidBigPictureUrl) {
            $res['AndroidBigPictureUrl'] = $this->androidBigPictureUrl;
        }
        if (null !== $this->androidBigTitle) {
            $res['AndroidBigTitle'] = $this->androidBigTitle;
        }
        if (null !== $this->androidExtParameters) {
            $res['AndroidExtParameters'] = $this->androidExtParameters;
        }
        if (null !== $this->androidHonorTargetUserType) {
            $res['AndroidHonorTargetUserType'] = $this->androidHonorTargetUserType;
        }
        if (null !== $this->androidHuaweiReceiptId) {
            $res['AndroidHuaweiReceiptId'] = $this->androidHuaweiReceiptId;
        }
        if (null !== $this->androidHuaweiTargetUserType) {
            $res['AndroidHuaweiTargetUserType'] = $this->androidHuaweiTargetUserType;
        }
        if (null !== $this->androidImageUrl) {
            $res['AndroidImageUrl'] = $this->androidImageUrl;
        }
        if (null !== $this->androidInboxBody) {
            $res['AndroidInboxBody'] = $this->androidInboxBody;
        }
        if (null !== $this->androidMessageHuaweiCategory) {
            $res['AndroidMessageHuaweiCategory'] = $this->androidMessageHuaweiCategory;
        }
        if (null !== $this->androidMessageHuaweiUrgency) {
            $res['AndroidMessageHuaweiUrgency'] = $this->androidMessageHuaweiUrgency;
        }
        if (null !== $this->androidMessageOppoCategory) {
            $res['AndroidMessageOppoCategory'] = $this->androidMessageOppoCategory;
        }
        if (null !== $this->androidMessageOppoNotifyLevel) {
            $res['AndroidMessageOppoNotifyLevel'] = $this->androidMessageOppoNotifyLevel;
        }
        if (null !== $this->androidMessageVivoCategory) {
            $res['AndroidMessageVivoCategory'] = $this->androidMessageVivoCategory;
        }
        if (null !== $this->androidMusic) {
            $res['AndroidMusic'] = $this->androidMusic;
        }
        if (null !== $this->androidNotificationBarPriority) {
            $res['AndroidNotificationBarPriority'] = $this->androidNotificationBarPriority;
        }
        if (null !== $this->androidNotificationBarType) {
            $res['AndroidNotificationBarType'] = $this->androidNotificationBarType;
        }
        if (null !== $this->androidNotificationChannel) {
            $res['AndroidNotificationChannel'] = $this->androidNotificationChannel;
        }
        if (null !== $this->androidNotificationGroup) {
            $res['AndroidNotificationGroup'] = $this->androidNotificationGroup;
        }
        if (null !== $this->androidNotificationHonorChannel) {
            $res['AndroidNotificationHonorChannel'] = $this->androidNotificationHonorChannel;
        }
        if (null !== $this->androidNotificationHuaweiChannel) {
            $res['AndroidNotificationHuaweiChannel'] = $this->androidNotificationHuaweiChannel;
        }
        if (null !== $this->androidNotificationNotifyId) {
            $res['AndroidNotificationNotifyId'] = $this->androidNotificationNotifyId;
        }
        if (null !== $this->androidNotificationThreadId) {
            $res['AndroidNotificationThreadId'] = $this->androidNotificationThreadId;
        }
        if (null !== $this->androidNotificationVivoChannel) {
            $res['AndroidNotificationVivoChannel'] = $this->androidNotificationVivoChannel;
        }
        if (null !== $this->androidNotificationXiaomiChannel) {
            $res['AndroidNotificationXiaomiChannel'] = $this->androidNotificationXiaomiChannel;
        }
        if (null !== $this->androidNotifyType) {
            $res['AndroidNotifyType'] = $this->androidNotifyType;
        }
        if (null !== $this->androidOpenType) {
            $res['AndroidOpenType'] = $this->androidOpenType;
        }
        if (null !== $this->androidOpenUrl) {
            $res['AndroidOpenUrl'] = $this->androidOpenUrl;
        }
        if (null !== $this->androidPopupActivity) {
            $res['AndroidPopupActivity'] = $this->androidPopupActivity;
        }
        if (null !== $this->androidPopupBody) {
            $res['AndroidPopupBody'] = $this->androidPopupBody;
        }
        if (null !== $this->androidPopupTitle) {
            $res['AndroidPopupTitle'] = $this->androidPopupTitle;
        }
        if (null !== $this->androidRemind) {
            $res['AndroidRemind'] = $this->androidRemind;
        }
        if (null !== $this->androidRenderStyle) {
            $res['AndroidRenderStyle'] = $this->androidRenderStyle;
        }
        if (null !== $this->androidTargetUserType) {
            $res['AndroidTargetUserType'] = $this->androidTargetUserType;
        }
        if (null !== $this->androidVivoPushMode) {
            $res['AndroidVivoPushMode'] = $this->androidVivoPushMode;
        }
        if (null !== $this->androidVivoReceiptId) {
            $res['AndroidVivoReceiptId'] = $this->androidVivoReceiptId;
        }
        if (null !== $this->androidXiaoMiActivity) {
            $res['AndroidXiaoMiActivity'] = $this->androidXiaoMiActivity;
        }
        if (null !== $this->androidXiaoMiNotifyBody) {
            $res['AndroidXiaoMiNotifyBody'] = $this->androidXiaoMiNotifyBody;
        }
        if (null !== $this->androidXiaoMiNotifyTitle) {
            $res['AndroidXiaoMiNotifyTitle'] = $this->androidXiaoMiNotifyTitle;
        }
        if (null !== $this->androidXiaomiBigPictureUrl) {
            $res['AndroidXiaomiBigPictureUrl'] = $this->androidXiaomiBigPictureUrl;
        }
        if (null !== $this->androidXiaomiImageUrl) {
            $res['AndroidXiaomiImageUrl'] = $this->androidXiaomiImageUrl;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->harmonyAction) {
            $res['HarmonyAction'] = $this->harmonyAction;
        }
        if (null !== $this->harmonyActionType) {
            $res['HarmonyActionType'] = $this->harmonyActionType;
        }
        if (null !== $this->harmonyBadgeAddNum) {
            $res['HarmonyBadgeAddNum'] = $this->harmonyBadgeAddNum;
        }
        if (null !== $this->harmonyBadgeSetNum) {
            $res['HarmonyBadgeSetNum'] = $this->harmonyBadgeSetNum;
        }
        if (null !== $this->harmonyCategory) {
            $res['HarmonyCategory'] = $this->harmonyCategory;
        }
        if (null !== $this->harmonyExtParameters) {
            $res['HarmonyExtParameters'] = $this->harmonyExtParameters;
        }
        if (null !== $this->harmonyExtensionExtraData) {
            $res['HarmonyExtensionExtraData'] = $this->harmonyExtensionExtraData;
        }
        if (null !== $this->harmonyExtensionPush) {
            $res['HarmonyExtensionPush'] = $this->harmonyExtensionPush;
        }
        if (null !== $this->harmonyImageUrl) {
            $res['HarmonyImageUrl'] = $this->harmonyImageUrl;
        }
        if (null !== $this->harmonyInboxContent) {
            $res['HarmonyInboxContent'] = $this->harmonyInboxContent;
        }
        if (null !== $this->harmonyNotificationSlotType) {
            $res['HarmonyNotificationSlotType'] = $this->harmonyNotificationSlotType;
        }
        if (null !== $this->harmonyNotifyId) {
            $res['HarmonyNotifyId'] = $this->harmonyNotifyId;
        }
        if (null !== $this->harmonyReceiptId) {
            $res['HarmonyReceiptId'] = $this->harmonyReceiptId;
        }
        if (null !== $this->harmonyRemind) {
            $res['HarmonyRemind'] = $this->harmonyRemind;
        }
        if (null !== $this->harmonyRemindBody) {
            $res['HarmonyRemindBody'] = $this->harmonyRemindBody;
        }
        if (null !== $this->harmonyRemindTitle) {
            $res['HarmonyRemindTitle'] = $this->harmonyRemindTitle;
        }
        if (null !== $this->harmonyRenderStyle) {
            $res['HarmonyRenderStyle'] = $this->harmonyRenderStyle;
        }
        if (null !== $this->harmonyTestMessage) {
            $res['HarmonyTestMessage'] = $this->harmonyTestMessage;
        }
        if (null !== $this->harmonyUri) {
            $res['HarmonyUri'] = $this->harmonyUri;
        }
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->sendChannels) {
            $res['SendChannels'] = $this->sendChannels;
        }
        if (null !== $this->sendSpeed) {
            $res['SendSpeed'] = $this->sendSpeed;
        }
        if (null !== $this->storeOffline) {
            $res['StoreOffline'] = $this->storeOffline;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->trim) {
            $res['Trim'] = $this->trim;
        }
        if (null !== $this->iOSApnsEnv) {
            $res['iOSApnsEnv'] = $this->iOSApnsEnv;
        }
        if (null !== $this->iOSBadge) {
            $res['iOSBadge'] = $this->iOSBadge;
        }
        if (null !== $this->iOSBadgeAutoIncrement) {
            $res['iOSBadgeAutoIncrement'] = $this->iOSBadgeAutoIncrement;
        }
        if (null !== $this->iOSExtParameters) {
            $res['iOSExtParameters'] = $this->iOSExtParameters;
        }
        if (null !== $this->iOSInterruptionLevel) {
            $res['iOSInterruptionLevel'] = $this->iOSInterruptionLevel;
        }
        if (null !== $this->iOSLiveActivityAttributes) {
            $res['iOSLiveActivityAttributes'] = $this->iOSLiveActivityAttributes;
        }
        if (null !== $this->iOSLiveActivityAttributesType) {
            $res['iOSLiveActivityAttributesType'] = $this->iOSLiveActivityAttributesType;
        }
        if (null !== $this->iOSLiveActivityContentState) {
            $res['iOSLiveActivityContentState'] = $this->iOSLiveActivityContentState;
        }
        if (null !== $this->iOSLiveActivityDismissalDate) {
            $res['iOSLiveActivityDismissalDate'] = $this->iOSLiveActivityDismissalDate;
        }
        if (null !== $this->iOSLiveActivityEvent) {
            $res['iOSLiveActivityEvent'] = $this->iOSLiveActivityEvent;
        }
        if (null !== $this->iOSLiveActivityId) {
            $res['iOSLiveActivityId'] = $this->iOSLiveActivityId;
        }
        if (null !== $this->iOSLiveActivityStaleDate) {
            $res['iOSLiveActivityStaleDate'] = $this->iOSLiveActivityStaleDate;
        }
        if (null !== $this->iOSMusic) {
            $res['iOSMusic'] = $this->iOSMusic;
        }
        if (null !== $this->iOSMutableContent) {
            $res['iOSMutableContent'] = $this->iOSMutableContent;
        }
        if (null !== $this->iOSNotificationCategory) {
            $res['iOSNotificationCategory'] = $this->iOSNotificationCategory;
        }
        if (null !== $this->iOSNotificationCollapseId) {
            $res['iOSNotificationCollapseId'] = $this->iOSNotificationCollapseId;
        }
        if (null !== $this->iOSNotificationThreadId) {
            $res['iOSNotificationThreadId'] = $this->iOSNotificationThreadId;
        }
        if (null !== $this->iOSRelevanceScore) {
            $res['iOSRelevanceScore'] = $this->iOSRelevanceScore;
        }
        if (null !== $this->iOSRemind) {
            $res['iOSRemind'] = $this->iOSRemind;
        }
        if (null !== $this->iOSRemindBody) {
            $res['iOSRemindBody'] = $this->iOSRemindBody;
        }
        if (null !== $this->iOSSilentNotification) {
            $res['iOSSilentNotification'] = $this->iOSSilentNotification;
        }
        if (null !== $this->iOSSubtitle) {
            $res['iOSSubtitle'] = $this->iOSSubtitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidActivity'])) {
            $model->androidActivity = $map['AndroidActivity'];
        }
        if (isset($map['AndroidBadgeAddNum'])) {
            $model->androidBadgeAddNum = $map['AndroidBadgeAddNum'];
        }
        if (isset($map['AndroidBadgeClass'])) {
            $model->androidBadgeClass = $map['AndroidBadgeClass'];
        }
        if (isset($map['AndroidBadgeSetNum'])) {
            $model->androidBadgeSetNum = $map['AndroidBadgeSetNum'];
        }
        if (isset($map['AndroidBigBody'])) {
            $model->androidBigBody = $map['AndroidBigBody'];
        }
        if (isset($map['AndroidBigPictureUrl'])) {
            $model->androidBigPictureUrl = $map['AndroidBigPictureUrl'];
        }
        if (isset($map['AndroidBigTitle'])) {
            $model->androidBigTitle = $map['AndroidBigTitle'];
        }
        if (isset($map['AndroidExtParameters'])) {
            $model->androidExtParameters = $map['AndroidExtParameters'];
        }
        if (isset($map['AndroidHonorTargetUserType'])) {
            $model->androidHonorTargetUserType = $map['AndroidHonorTargetUserType'];
        }
        if (isset($map['AndroidHuaweiReceiptId'])) {
            $model->androidHuaweiReceiptId = $map['AndroidHuaweiReceiptId'];
        }
        if (isset($map['AndroidHuaweiTargetUserType'])) {
            $model->androidHuaweiTargetUserType = $map['AndroidHuaweiTargetUserType'];
        }
        if (isset($map['AndroidImageUrl'])) {
            $model->androidImageUrl = $map['AndroidImageUrl'];
        }
        if (isset($map['AndroidInboxBody'])) {
            $model->androidInboxBody = $map['AndroidInboxBody'];
        }
        if (isset($map['AndroidMessageHuaweiCategory'])) {
            $model->androidMessageHuaweiCategory = $map['AndroidMessageHuaweiCategory'];
        }
        if (isset($map['AndroidMessageHuaweiUrgency'])) {
            $model->androidMessageHuaweiUrgency = $map['AndroidMessageHuaweiUrgency'];
        }
        if (isset($map['AndroidMessageOppoCategory'])) {
            $model->androidMessageOppoCategory = $map['AndroidMessageOppoCategory'];
        }
        if (isset($map['AndroidMessageOppoNotifyLevel'])) {
            $model->androidMessageOppoNotifyLevel = $map['AndroidMessageOppoNotifyLevel'];
        }
        if (isset($map['AndroidMessageVivoCategory'])) {
            $model->androidMessageVivoCategory = $map['AndroidMessageVivoCategory'];
        }
        if (isset($map['AndroidMusic'])) {
            $model->androidMusic = $map['AndroidMusic'];
        }
        if (isset($map['AndroidNotificationBarPriority'])) {
            $model->androidNotificationBarPriority = $map['AndroidNotificationBarPriority'];
        }
        if (isset($map['AndroidNotificationBarType'])) {
            $model->androidNotificationBarType = $map['AndroidNotificationBarType'];
        }
        if (isset($map['AndroidNotificationChannel'])) {
            $model->androidNotificationChannel = $map['AndroidNotificationChannel'];
        }
        if (isset($map['AndroidNotificationGroup'])) {
            $model->androidNotificationGroup = $map['AndroidNotificationGroup'];
        }
        if (isset($map['AndroidNotificationHonorChannel'])) {
            $model->androidNotificationHonorChannel = $map['AndroidNotificationHonorChannel'];
        }
        if (isset($map['AndroidNotificationHuaweiChannel'])) {
            $model->androidNotificationHuaweiChannel = $map['AndroidNotificationHuaweiChannel'];
        }
        if (isset($map['AndroidNotificationNotifyId'])) {
            $model->androidNotificationNotifyId = $map['AndroidNotificationNotifyId'];
        }
        if (isset($map['AndroidNotificationThreadId'])) {
            $model->androidNotificationThreadId = $map['AndroidNotificationThreadId'];
        }
        if (isset($map['AndroidNotificationVivoChannel'])) {
            $model->androidNotificationVivoChannel = $map['AndroidNotificationVivoChannel'];
        }
        if (isset($map['AndroidNotificationXiaomiChannel'])) {
            $model->androidNotificationXiaomiChannel = $map['AndroidNotificationXiaomiChannel'];
        }
        if (isset($map['AndroidNotifyType'])) {
            $model->androidNotifyType = $map['AndroidNotifyType'];
        }
        if (isset($map['AndroidOpenType'])) {
            $model->androidOpenType = $map['AndroidOpenType'];
        }
        if (isset($map['AndroidOpenUrl'])) {
            $model->androidOpenUrl = $map['AndroidOpenUrl'];
        }
        if (isset($map['AndroidPopupActivity'])) {
            $model->androidPopupActivity = $map['AndroidPopupActivity'];
        }
        if (isset($map['AndroidPopupBody'])) {
            $model->androidPopupBody = $map['AndroidPopupBody'];
        }
        if (isset($map['AndroidPopupTitle'])) {
            $model->androidPopupTitle = $map['AndroidPopupTitle'];
        }
        if (isset($map['AndroidRemind'])) {
            $model->androidRemind = $map['AndroidRemind'];
        }
        if (isset($map['AndroidRenderStyle'])) {
            $model->androidRenderStyle = $map['AndroidRenderStyle'];
        }
        if (isset($map['AndroidTargetUserType'])) {
            $model->androidTargetUserType = $map['AndroidTargetUserType'];
        }
        if (isset($map['AndroidVivoPushMode'])) {
            $model->androidVivoPushMode = $map['AndroidVivoPushMode'];
        }
        if (isset($map['AndroidVivoReceiptId'])) {
            $model->androidVivoReceiptId = $map['AndroidVivoReceiptId'];
        }
        if (isset($map['AndroidXiaoMiActivity'])) {
            $model->androidXiaoMiActivity = $map['AndroidXiaoMiActivity'];
        }
        if (isset($map['AndroidXiaoMiNotifyBody'])) {
            $model->androidXiaoMiNotifyBody = $map['AndroidXiaoMiNotifyBody'];
        }
        if (isset($map['AndroidXiaoMiNotifyTitle'])) {
            $model->androidXiaoMiNotifyTitle = $map['AndroidXiaoMiNotifyTitle'];
        }
        if (isset($map['AndroidXiaomiBigPictureUrl'])) {
            $model->androidXiaomiBigPictureUrl = $map['AndroidXiaomiBigPictureUrl'];
        }
        if (isset($map['AndroidXiaomiImageUrl'])) {
            $model->androidXiaomiImageUrl = $map['AndroidXiaomiImageUrl'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['HarmonyAction'])) {
            $model->harmonyAction = $map['HarmonyAction'];
        }
        if (isset($map['HarmonyActionType'])) {
            $model->harmonyActionType = $map['HarmonyActionType'];
        }
        if (isset($map['HarmonyBadgeAddNum'])) {
            $model->harmonyBadgeAddNum = $map['HarmonyBadgeAddNum'];
        }
        if (isset($map['HarmonyBadgeSetNum'])) {
            $model->harmonyBadgeSetNum = $map['HarmonyBadgeSetNum'];
        }
        if (isset($map['HarmonyCategory'])) {
            $model->harmonyCategory = $map['HarmonyCategory'];
        }
        if (isset($map['HarmonyExtParameters'])) {
            $model->harmonyExtParameters = $map['HarmonyExtParameters'];
        }
        if (isset($map['HarmonyExtensionExtraData'])) {
            $model->harmonyExtensionExtraData = $map['HarmonyExtensionExtraData'];
        }
        if (isset($map['HarmonyExtensionPush'])) {
            $model->harmonyExtensionPush = $map['HarmonyExtensionPush'];
        }
        if (isset($map['HarmonyImageUrl'])) {
            $model->harmonyImageUrl = $map['HarmonyImageUrl'];
        }
        if (isset($map['HarmonyInboxContent'])) {
            $model->harmonyInboxContent = $map['HarmonyInboxContent'];
        }
        if (isset($map['HarmonyNotificationSlotType'])) {
            $model->harmonyNotificationSlotType = $map['HarmonyNotificationSlotType'];
        }
        if (isset($map['HarmonyNotifyId'])) {
            $model->harmonyNotifyId = $map['HarmonyNotifyId'];
        }
        if (isset($map['HarmonyReceiptId'])) {
            $model->harmonyReceiptId = $map['HarmonyReceiptId'];
        }
        if (isset($map['HarmonyRemind'])) {
            $model->harmonyRemind = $map['HarmonyRemind'];
        }
        if (isset($map['HarmonyRemindBody'])) {
            $model->harmonyRemindBody = $map['HarmonyRemindBody'];
        }
        if (isset($map['HarmonyRemindTitle'])) {
            $model->harmonyRemindTitle = $map['HarmonyRemindTitle'];
        }
        if (isset($map['HarmonyRenderStyle'])) {
            $model->harmonyRenderStyle = $map['HarmonyRenderStyle'];
        }
        if (isset($map['HarmonyTestMessage'])) {
            $model->harmonyTestMessage = $map['HarmonyTestMessage'];
        }
        if (isset($map['HarmonyUri'])) {
            $model->harmonyUri = $map['HarmonyUri'];
        }
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['SendChannels'])) {
            $model->sendChannels = $map['SendChannels'];
        }
        if (isset($map['SendSpeed'])) {
            $model->sendSpeed = $map['SendSpeed'];
        }
        if (isset($map['StoreOffline'])) {
            $model->storeOffline = $map['StoreOffline'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Trim'])) {
            $model->trim = $map['Trim'];
        }
        if (isset($map['iOSApnsEnv'])) {
            $model->iOSApnsEnv = $map['iOSApnsEnv'];
        }
        if (isset($map['iOSBadge'])) {
            $model->iOSBadge = $map['iOSBadge'];
        }
        if (isset($map['iOSBadgeAutoIncrement'])) {
            $model->iOSBadgeAutoIncrement = $map['iOSBadgeAutoIncrement'];
        }
        if (isset($map['iOSExtParameters'])) {
            $model->iOSExtParameters = $map['iOSExtParameters'];
        }
        if (isset($map['iOSInterruptionLevel'])) {
            $model->iOSInterruptionLevel = $map['iOSInterruptionLevel'];
        }
        if (isset($map['iOSLiveActivityAttributes'])) {
            $model->iOSLiveActivityAttributes = $map['iOSLiveActivityAttributes'];
        }
        if (isset($map['iOSLiveActivityAttributesType'])) {
            $model->iOSLiveActivityAttributesType = $map['iOSLiveActivityAttributesType'];
        }
        if (isset($map['iOSLiveActivityContentState'])) {
            $model->iOSLiveActivityContentState = $map['iOSLiveActivityContentState'];
        }
        if (isset($map['iOSLiveActivityDismissalDate'])) {
            $model->iOSLiveActivityDismissalDate = $map['iOSLiveActivityDismissalDate'];
        }
        if (isset($map['iOSLiveActivityEvent'])) {
            $model->iOSLiveActivityEvent = $map['iOSLiveActivityEvent'];
        }
        if (isset($map['iOSLiveActivityId'])) {
            $model->iOSLiveActivityId = $map['iOSLiveActivityId'];
        }
        if (isset($map['iOSLiveActivityStaleDate'])) {
            $model->iOSLiveActivityStaleDate = $map['iOSLiveActivityStaleDate'];
        }
        if (isset($map['iOSMusic'])) {
            $model->iOSMusic = $map['iOSMusic'];
        }
        if (isset($map['iOSMutableContent'])) {
            $model->iOSMutableContent = $map['iOSMutableContent'];
        }
        if (isset($map['iOSNotificationCategory'])) {
            $model->iOSNotificationCategory = $map['iOSNotificationCategory'];
        }
        if (isset($map['iOSNotificationCollapseId'])) {
            $model->iOSNotificationCollapseId = $map['iOSNotificationCollapseId'];
        }
        if (isset($map['iOSNotificationThreadId'])) {
            $model->iOSNotificationThreadId = $map['iOSNotificationThreadId'];
        }
        if (isset($map['iOSRelevanceScore'])) {
            $model->iOSRelevanceScore = $map['iOSRelevanceScore'];
        }
        if (isset($map['iOSRemind'])) {
            $model->iOSRemind = $map['iOSRemind'];
        }
        if (isset($map['iOSRemindBody'])) {
            $model->iOSRemindBody = $map['iOSRemindBody'];
        }
        if (isset($map['iOSSilentNotification'])) {
            $model->iOSSilentNotification = $map['iOSSilentNotification'];
        }
        if (isset($map['iOSSubtitle'])) {
            $model->iOSSubtitle = $map['iOSSubtitle'];
        }

        return $model;
    }
}
