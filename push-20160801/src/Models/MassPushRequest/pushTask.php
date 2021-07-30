<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\MassPushRequest;

use AlibabaCloud\Tea\Model;

class pushTask extends Model
{
    /**
     * @var string
     */
    public $jobKey;

    /**
     * @var bool
     */
    public $iOSSilentNotification;

    /**
     * @var string
     */
    public $iOSNotificationCollapseId;

    /**
     * @var string
     */
    public $androidRenderStyle;

    /**
     * @var bool
     */
    public $storeOffline;

    /**
     * @var string
     */
    public $iOSSubtitle;

    /**
     * @var string
     */
    public $iOSNotificationCategory;

    /**
     * @var string
     */
    public $androidNotificationChannel;

    /**
     * @var string
     */
    public $androidNotificationHuaweiChannel;

    /**
     * @var string
     */
    public $iOSApnsEnv;

    /**
     * @var bool
     */
    public $iOSBadgeAutoIncrement;

    /**
     * @var string
     */
    public $androidXiaoMiNotifyTitle;

    /**
     * @var string
     */
    public $androidNotificationXiaomiChannel;

    /**
     * @var string
     */
    public $androidXiaoMiActivity;

    /**
     * @var string
     */
    public $androidPopupTitle;

    /**
     * @var string
     */
    public $iOSRemindBody;

    /**
     * @var string
     */
    public $androidActivity;

    /**
     * @var string
     */
    public $androidNotifyType;

    /**
     * @var string
     */
    public $androidBigBody;

    /**
     * @var bool
     */
    public $iOSMutableContent;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $androidOpenUrl;

    /**
     * @var string
     */
    public $androidBigTitle;

    /**
     * @var int
     */
    public $androidNotificationNotifyId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $androidNotificationVivoChannel;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $androidOpenType;

    /**
     * @var string
     */
    public $androidPopupActivity;

    /**
     * @var bool
     */
    public $androidRemind;

    /**
     * @var string
     */
    public $androidPopupBody;

    /**
     * @var string
     */
    public $androidExtParameters;

    /**
     * @var string
     */
    public $iOSExtParameters;

    /**
     * @var string
     */
    public $androidXiaoMiNotifyBody;

    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $androidNotificationBarType;

    /**
     * @var int
     */
    public $androidNotificationBarPriority;

    /**
     * @var string
     */
    public $androidXiaomiBigPictureUrl;

    /**
     * @var string
     */
    public $targetValue;

    /**
     * @var string
     */
    public $iOSMusic;

    /**
     * @var bool
     */
    public $iOSRemind;

    /**
     * @var string
     */
    public $pushType;

    /**
     * @var int
     */
    public $sendSpeed;

    /**
     * @var int
     */
    public $iOSBadge;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $pushTime;

    /**
     * @var string
     */
    public $androidMusic;
    protected $_name = [
        'jobKey'                           => 'JobKey',
        'iOSSilentNotification'            => 'iOSSilentNotification',
        'iOSNotificationCollapseId'        => 'iOSNotificationCollapseId',
        'androidRenderStyle'               => 'AndroidRenderStyle',
        'storeOffline'                     => 'StoreOffline',
        'iOSSubtitle'                      => 'iOSSubtitle',
        'iOSNotificationCategory'          => 'iOSNotificationCategory',
        'androidNotificationChannel'       => 'AndroidNotificationChannel',
        'androidNotificationHuaweiChannel' => 'AndroidNotificationHuaweiChannel',
        'iOSApnsEnv'                       => 'iOSApnsEnv',
        'iOSBadgeAutoIncrement'            => 'iOSBadgeAutoIncrement',
        'androidXiaoMiNotifyTitle'         => 'AndroidXiaoMiNotifyTitle',
        'androidNotificationXiaomiChannel' => 'AndroidNotificationXiaomiChannel',
        'androidXiaoMiActivity'            => 'AndroidXiaoMiActivity',
        'androidPopupTitle'                => 'AndroidPopupTitle',
        'iOSRemindBody'                    => 'iOSRemindBody',
        'androidActivity'                  => 'AndroidActivity',
        'androidNotifyType'                => 'AndroidNotifyType',
        'androidBigBody'                   => 'AndroidBigBody',
        'iOSMutableContent'                => 'iOSMutableContent',
        'target'                           => 'Target',
        'androidOpenUrl'                   => 'AndroidOpenUrl',
        'androidBigTitle'                  => 'AndroidBigTitle',
        'androidNotificationNotifyId'      => 'AndroidNotificationNotifyId',
        'expireTime'                       => 'ExpireTime',
        'androidNotificationVivoChannel'   => 'AndroidNotificationVivoChannel',
        'deviceType'                       => 'DeviceType',
        'androidOpenType'                  => 'AndroidOpenType',
        'androidPopupActivity'             => 'AndroidPopupActivity',
        'androidRemind'                    => 'AndroidRemind',
        'androidPopupBody'                 => 'AndroidPopupBody',
        'androidExtParameters'             => 'AndroidExtParameters',
        'iOSExtParameters'                 => 'iOSExtParameters',
        'androidXiaoMiNotifyBody'          => 'AndroidXiaoMiNotifyBody',
        'body'                             => 'Body',
        'androidNotificationBarType'       => 'AndroidNotificationBarType',
        'androidNotificationBarPriority'   => 'AndroidNotificationBarPriority',
        'androidXiaomiBigPictureUrl'       => 'AndroidXiaomiBigPictureUrl',
        'targetValue'                      => 'TargetValue',
        'iOSMusic'                         => 'iOSMusic',
        'iOSRemind'                        => 'iOSRemind',
        'pushType'                         => 'PushType',
        'sendSpeed'                        => 'SendSpeed',
        'iOSBadge'                         => 'iOSBadge',
        'title'                            => 'Title',
        'pushTime'                         => 'PushTime',
        'androidMusic'                     => 'AndroidMusic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->iOSSilentNotification) {
            $res['iOSSilentNotification'] = $this->iOSSilentNotification;
        }
        if (null !== $this->iOSNotificationCollapseId) {
            $res['iOSNotificationCollapseId'] = $this->iOSNotificationCollapseId;
        }
        if (null !== $this->androidRenderStyle) {
            $res['AndroidRenderStyle'] = $this->androidRenderStyle;
        }
        if (null !== $this->storeOffline) {
            $res['StoreOffline'] = $this->storeOffline;
        }
        if (null !== $this->iOSSubtitle) {
            $res['iOSSubtitle'] = $this->iOSSubtitle;
        }
        if (null !== $this->iOSNotificationCategory) {
            $res['iOSNotificationCategory'] = $this->iOSNotificationCategory;
        }
        if (null !== $this->androidNotificationChannel) {
            $res['AndroidNotificationChannel'] = $this->androidNotificationChannel;
        }
        if (null !== $this->androidNotificationHuaweiChannel) {
            $res['AndroidNotificationHuaweiChannel'] = $this->androidNotificationHuaweiChannel;
        }
        if (null !== $this->iOSApnsEnv) {
            $res['iOSApnsEnv'] = $this->iOSApnsEnv;
        }
        if (null !== $this->iOSBadgeAutoIncrement) {
            $res['iOSBadgeAutoIncrement'] = $this->iOSBadgeAutoIncrement;
        }
        if (null !== $this->androidXiaoMiNotifyTitle) {
            $res['AndroidXiaoMiNotifyTitle'] = $this->androidXiaoMiNotifyTitle;
        }
        if (null !== $this->androidNotificationXiaomiChannel) {
            $res['AndroidNotificationXiaomiChannel'] = $this->androidNotificationXiaomiChannel;
        }
        if (null !== $this->androidXiaoMiActivity) {
            $res['AndroidXiaoMiActivity'] = $this->androidXiaoMiActivity;
        }
        if (null !== $this->androidPopupTitle) {
            $res['AndroidPopupTitle'] = $this->androidPopupTitle;
        }
        if (null !== $this->iOSRemindBody) {
            $res['iOSRemindBody'] = $this->iOSRemindBody;
        }
        if (null !== $this->androidActivity) {
            $res['AndroidActivity'] = $this->androidActivity;
        }
        if (null !== $this->androidNotifyType) {
            $res['AndroidNotifyType'] = $this->androidNotifyType;
        }
        if (null !== $this->androidBigBody) {
            $res['AndroidBigBody'] = $this->androidBigBody;
        }
        if (null !== $this->iOSMutableContent) {
            $res['iOSMutableContent'] = $this->iOSMutableContent;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->androidOpenUrl) {
            $res['AndroidOpenUrl'] = $this->androidOpenUrl;
        }
        if (null !== $this->androidBigTitle) {
            $res['AndroidBigTitle'] = $this->androidBigTitle;
        }
        if (null !== $this->androidNotificationNotifyId) {
            $res['AndroidNotificationNotifyId'] = $this->androidNotificationNotifyId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->androidNotificationVivoChannel) {
            $res['AndroidNotificationVivoChannel'] = $this->androidNotificationVivoChannel;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->androidOpenType) {
            $res['AndroidOpenType'] = $this->androidOpenType;
        }
        if (null !== $this->androidPopupActivity) {
            $res['AndroidPopupActivity'] = $this->androidPopupActivity;
        }
        if (null !== $this->androidRemind) {
            $res['AndroidRemind'] = $this->androidRemind;
        }
        if (null !== $this->androidPopupBody) {
            $res['AndroidPopupBody'] = $this->androidPopupBody;
        }
        if (null !== $this->androidExtParameters) {
            $res['AndroidExtParameters'] = $this->androidExtParameters;
        }
        if (null !== $this->iOSExtParameters) {
            $res['iOSExtParameters'] = $this->iOSExtParameters;
        }
        if (null !== $this->androidXiaoMiNotifyBody) {
            $res['AndroidXiaoMiNotifyBody'] = $this->androidXiaoMiNotifyBody;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->androidNotificationBarType) {
            $res['AndroidNotificationBarType'] = $this->androidNotificationBarType;
        }
        if (null !== $this->androidNotificationBarPriority) {
            $res['AndroidNotificationBarPriority'] = $this->androidNotificationBarPriority;
        }
        if (null !== $this->androidXiaomiBigPictureUrl) {
            $res['AndroidXiaomiBigPictureUrl'] = $this->androidXiaomiBigPictureUrl;
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }
        if (null !== $this->iOSMusic) {
            $res['iOSMusic'] = $this->iOSMusic;
        }
        if (null !== $this->iOSRemind) {
            $res['iOSRemind'] = $this->iOSRemind;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->sendSpeed) {
            $res['SendSpeed'] = $this->sendSpeed;
        }
        if (null !== $this->iOSBadge) {
            $res['iOSBadge'] = $this->iOSBadge;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->androidMusic) {
            $res['AndroidMusic'] = $this->androidMusic;
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
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['iOSSilentNotification'])) {
            $model->iOSSilentNotification = $map['iOSSilentNotification'];
        }
        if (isset($map['iOSNotificationCollapseId'])) {
            $model->iOSNotificationCollapseId = $map['iOSNotificationCollapseId'];
        }
        if (isset($map['AndroidRenderStyle'])) {
            $model->androidRenderStyle = $map['AndroidRenderStyle'];
        }
        if (isset($map['StoreOffline'])) {
            $model->storeOffline = $map['StoreOffline'];
        }
        if (isset($map['iOSSubtitle'])) {
            $model->iOSSubtitle = $map['iOSSubtitle'];
        }
        if (isset($map['iOSNotificationCategory'])) {
            $model->iOSNotificationCategory = $map['iOSNotificationCategory'];
        }
        if (isset($map['AndroidNotificationChannel'])) {
            $model->androidNotificationChannel = $map['AndroidNotificationChannel'];
        }
        if (isset($map['AndroidNotificationHuaweiChannel'])) {
            $model->androidNotificationHuaweiChannel = $map['AndroidNotificationHuaweiChannel'];
        }
        if (isset($map['iOSApnsEnv'])) {
            $model->iOSApnsEnv = $map['iOSApnsEnv'];
        }
        if (isset($map['iOSBadgeAutoIncrement'])) {
            $model->iOSBadgeAutoIncrement = $map['iOSBadgeAutoIncrement'];
        }
        if (isset($map['AndroidXiaoMiNotifyTitle'])) {
            $model->androidXiaoMiNotifyTitle = $map['AndroidXiaoMiNotifyTitle'];
        }
        if (isset($map['AndroidNotificationXiaomiChannel'])) {
            $model->androidNotificationXiaomiChannel = $map['AndroidNotificationXiaomiChannel'];
        }
        if (isset($map['AndroidXiaoMiActivity'])) {
            $model->androidXiaoMiActivity = $map['AndroidXiaoMiActivity'];
        }
        if (isset($map['AndroidPopupTitle'])) {
            $model->androidPopupTitle = $map['AndroidPopupTitle'];
        }
        if (isset($map['iOSRemindBody'])) {
            $model->iOSRemindBody = $map['iOSRemindBody'];
        }
        if (isset($map['AndroidActivity'])) {
            $model->androidActivity = $map['AndroidActivity'];
        }
        if (isset($map['AndroidNotifyType'])) {
            $model->androidNotifyType = $map['AndroidNotifyType'];
        }
        if (isset($map['AndroidBigBody'])) {
            $model->androidBigBody = $map['AndroidBigBody'];
        }
        if (isset($map['iOSMutableContent'])) {
            $model->iOSMutableContent = $map['iOSMutableContent'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['AndroidOpenUrl'])) {
            $model->androidOpenUrl = $map['AndroidOpenUrl'];
        }
        if (isset($map['AndroidBigTitle'])) {
            $model->androidBigTitle = $map['AndroidBigTitle'];
        }
        if (isset($map['AndroidNotificationNotifyId'])) {
            $model->androidNotificationNotifyId = $map['AndroidNotificationNotifyId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['AndroidNotificationVivoChannel'])) {
            $model->androidNotificationVivoChannel = $map['AndroidNotificationVivoChannel'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['AndroidOpenType'])) {
            $model->androidOpenType = $map['AndroidOpenType'];
        }
        if (isset($map['AndroidPopupActivity'])) {
            $model->androidPopupActivity = $map['AndroidPopupActivity'];
        }
        if (isset($map['AndroidRemind'])) {
            $model->androidRemind = $map['AndroidRemind'];
        }
        if (isset($map['AndroidPopupBody'])) {
            $model->androidPopupBody = $map['AndroidPopupBody'];
        }
        if (isset($map['AndroidExtParameters'])) {
            $model->androidExtParameters = $map['AndroidExtParameters'];
        }
        if (isset($map['iOSExtParameters'])) {
            $model->iOSExtParameters = $map['iOSExtParameters'];
        }
        if (isset($map['AndroidXiaoMiNotifyBody'])) {
            $model->androidXiaoMiNotifyBody = $map['AndroidXiaoMiNotifyBody'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['AndroidNotificationBarType'])) {
            $model->androidNotificationBarType = $map['AndroidNotificationBarType'];
        }
        if (isset($map['AndroidNotificationBarPriority'])) {
            $model->androidNotificationBarPriority = $map['AndroidNotificationBarPriority'];
        }
        if (isset($map['AndroidXiaomiBigPictureUrl'])) {
            $model->androidXiaomiBigPictureUrl = $map['AndroidXiaomiBigPictureUrl'];
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }
        if (isset($map['iOSMusic'])) {
            $model->iOSMusic = $map['iOSMusic'];
        }
        if (isset($map['iOSRemind'])) {
            $model->iOSRemind = $map['iOSRemind'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['SendSpeed'])) {
            $model->sendSpeed = $map['SendSpeed'];
        }
        if (isset($map['iOSBadge'])) {
            $model->iOSBadge = $map['iOSBadge'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['AndroidMusic'])) {
            $model->androidMusic = $map['AndroidMusic'];
        }

        return $model;
    }
}
