<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class PushRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $pushType;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $targetValue;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $jobKey;

    /**
     * @var int
     */
    public $sendSpeed;

    /**
     * @var bool
     */
    public $storeOffline;

    /**
     * @var string
     */
    public $pushTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $iOSApnsEnv;

    /**
     * @var bool
     */
    public $iOSRemind;

    /**
     * @var string
     */
    public $iOSRemindBody;

    /**
     * @var int
     */
    public $iOSBadge;

    /**
     * @var bool
     */
    public $iOSBadgeAutoIncrement;

    /**
     * @var bool
     */
    public $iOSSilentNotification;

    /**
     * @var string
     */
    public $iOSMusic;

    /**
     * @var string
     */
    public $iOSSubtitle;

    /**
     * @var string
     */
    public $iOSNotificationCategory;

    /**
     * @var bool
     */
    public $iOSMutableContent;

    /**
     * @var string
     */
    public $iOSExtParameters;

    /**
     * @var string
     */
    public $androidNotifyType;

    /**
     * @var string
     */
    public $androidOpenType;

    /**
     * @var string
     */
    public $androidActivity;

    /**
     * @var string
     */
    public $androidMusic;

    /**
     * @var string
     */
    public $androidOpenUrl;

    /**
     * @var string
     */
    public $androidXiaoMiActivity;

    /**
     * @var string
     */
    public $androidXiaoMiNotifyTitle;

    /**
     * @var string
     */
    public $androidXiaoMiNotifyBody;

    /**
     * @var string
     */
    public $androidPopupActivity;

    /**
     * @var string
     */
    public $androidPopupTitle;

    /**
     * @var string
     */
    public $androidPopupBody;

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
    public $androidExtParameters;

    /**
     * @var bool
     */
    public $androidRemind;

    /**
     * @var string
     */
    public $androidNotificationChannel;

    /**
     * @var string
     */
    public $androidNotificationXiaomiChannel;

    /**
     * @var string
     */
    public $smsTemplateName;

    /**
     * @var string
     */
    public $smsSignName;

    /**
     * @var string
     */
    public $smsParams;

    /**
     * @var int
     */
    public $smsDelaySecs;

    /**
     * @var int
     */
    public $smsSendPolicy;

    /**
     * @var string
     */
    public $androidNotificationVivoChannel;

    /**
     * @var string
     */
    public $androidNotificationHuaweiChannel;

    /**
     * @var int
     */
    public $androidNotificationNotifyId;

    /**
     * @var string
     */
    public $iOSNotificationCollapseId;

    /**
     * @var int
     */
    public $androidRenderStyle;

    /**
     * @var string
     */
    public $androidBigTitle;

    /**
     * @var string
     */
    public $androidBigBody;

    /**
     * @var string
     */
    public $androidXiaomiBigPictureUrl;
    protected $_name = [
        'appKey'                           => 'AppKey',
        'pushType'                         => 'PushType',
        'deviceType'                       => 'DeviceType',
        'target'                           => 'Target',
        'targetValue'                      => 'TargetValue',
        'title'                            => 'Title',
        'body'                             => 'Body',
        'jobKey'                           => 'JobKey',
        'sendSpeed'                        => 'SendSpeed',
        'storeOffline'                     => 'StoreOffline',
        'pushTime'                         => 'PushTime',
        'expireTime'                       => 'ExpireTime',
        'iOSApnsEnv'                       => 'iOSApnsEnv',
        'iOSRemind'                        => 'iOSRemind',
        'iOSRemindBody'                    => 'iOSRemindBody',
        'iOSBadge'                         => 'iOSBadge',
        'iOSBadgeAutoIncrement'            => 'iOSBadgeAutoIncrement',
        'iOSSilentNotification'            => 'iOSSilentNotification',
        'iOSMusic'                         => 'iOSMusic',
        'iOSSubtitle'                      => 'iOSSubtitle',
        'iOSNotificationCategory'          => 'iOSNotificationCategory',
        'iOSMutableContent'                => 'iOSMutableContent',
        'iOSExtParameters'                 => 'iOSExtParameters',
        'androidNotifyType'                => 'AndroidNotifyType',
        'androidOpenType'                  => 'AndroidOpenType',
        'androidActivity'                  => 'AndroidActivity',
        'androidMusic'                     => 'AndroidMusic',
        'androidOpenUrl'                   => 'AndroidOpenUrl',
        'androidXiaoMiActivity'            => 'AndroidXiaoMiActivity',
        'androidXiaoMiNotifyTitle'         => 'AndroidXiaoMiNotifyTitle',
        'androidXiaoMiNotifyBody'          => 'AndroidXiaoMiNotifyBody',
        'androidPopupActivity'             => 'AndroidPopupActivity',
        'androidPopupTitle'                => 'AndroidPopupTitle',
        'androidPopupBody'                 => 'AndroidPopupBody',
        'androidNotificationBarType'       => 'AndroidNotificationBarType',
        'androidNotificationBarPriority'   => 'AndroidNotificationBarPriority',
        'androidExtParameters'             => 'AndroidExtParameters',
        'androidRemind'                    => 'AndroidRemind',
        'androidNotificationChannel'       => 'AndroidNotificationChannel',
        'androidNotificationXiaomiChannel' => 'AndroidNotificationXiaomiChannel',
        'smsTemplateName'                  => 'SmsTemplateName',
        'smsSignName'                      => 'SmsSignName',
        'smsParams'                        => 'SmsParams',
        'smsDelaySecs'                     => 'SmsDelaySecs',
        'smsSendPolicy'                    => 'SmsSendPolicy',
        'androidNotificationVivoChannel'   => 'AndroidNotificationVivoChannel',
        'androidNotificationHuaweiChannel' => 'AndroidNotificationHuaweiChannel',
        'androidNotificationNotifyId'      => 'AndroidNotificationNotifyId',
        'iOSNotificationCollapseId'        => 'iOSNotificationCollapseId',
        'androidRenderStyle'               => 'AndroidRenderStyle',
        'androidBigTitle'                  => 'AndroidBigTitle',
        'androidBigBody'                   => 'AndroidBigBody',
        'androidXiaomiBigPictureUrl'       => 'AndroidXiaomiBigPictureUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
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
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->sendSpeed) {
            $res['SendSpeed'] = $this->sendSpeed;
        }
        if (null !== $this->storeOffline) {
            $res['StoreOffline'] = $this->storeOffline;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->iOSApnsEnv) {
            $res['iOSApnsEnv'] = $this->iOSApnsEnv;
        }
        if (null !== $this->iOSRemind) {
            $res['iOSRemind'] = $this->iOSRemind;
        }
        if (null !== $this->iOSRemindBody) {
            $res['iOSRemindBody'] = $this->iOSRemindBody;
        }
        if (null !== $this->iOSBadge) {
            $res['iOSBadge'] = $this->iOSBadge;
        }
        if (null !== $this->iOSBadgeAutoIncrement) {
            $res['iOSBadgeAutoIncrement'] = $this->iOSBadgeAutoIncrement;
        }
        if (null !== $this->iOSSilentNotification) {
            $res['iOSSilentNotification'] = $this->iOSSilentNotification;
        }
        if (null !== $this->iOSMusic) {
            $res['iOSMusic'] = $this->iOSMusic;
        }
        if (null !== $this->iOSSubtitle) {
            $res['iOSSubtitle'] = $this->iOSSubtitle;
        }
        if (null !== $this->iOSNotificationCategory) {
            $res['iOSNotificationCategory'] = $this->iOSNotificationCategory;
        }
        if (null !== $this->iOSMutableContent) {
            $res['iOSMutableContent'] = $this->iOSMutableContent;
        }
        if (null !== $this->iOSExtParameters) {
            $res['iOSExtParameters'] = $this->iOSExtParameters;
        }
        if (null !== $this->androidNotifyType) {
            $res['AndroidNotifyType'] = $this->androidNotifyType;
        }
        if (null !== $this->androidOpenType) {
            $res['AndroidOpenType'] = $this->androidOpenType;
        }
        if (null !== $this->androidActivity) {
            $res['AndroidActivity'] = $this->androidActivity;
        }
        if (null !== $this->androidMusic) {
            $res['AndroidMusic'] = $this->androidMusic;
        }
        if (null !== $this->androidOpenUrl) {
            $res['AndroidOpenUrl'] = $this->androidOpenUrl;
        }
        if (null !== $this->androidXiaoMiActivity) {
            $res['AndroidXiaoMiActivity'] = $this->androidXiaoMiActivity;
        }
        if (null !== $this->androidXiaoMiNotifyTitle) {
            $res['AndroidXiaoMiNotifyTitle'] = $this->androidXiaoMiNotifyTitle;
        }
        if (null !== $this->androidXiaoMiNotifyBody) {
            $res['AndroidXiaoMiNotifyBody'] = $this->androidXiaoMiNotifyBody;
        }
        if (null !== $this->androidPopupActivity) {
            $res['AndroidPopupActivity'] = $this->androidPopupActivity;
        }
        if (null !== $this->androidPopupTitle) {
            $res['AndroidPopupTitle'] = $this->androidPopupTitle;
        }
        if (null !== $this->androidPopupBody) {
            $res['AndroidPopupBody'] = $this->androidPopupBody;
        }
        if (null !== $this->androidNotificationBarType) {
            $res['AndroidNotificationBarType'] = $this->androidNotificationBarType;
        }
        if (null !== $this->androidNotificationBarPriority) {
            $res['AndroidNotificationBarPriority'] = $this->androidNotificationBarPriority;
        }
        if (null !== $this->androidExtParameters) {
            $res['AndroidExtParameters'] = $this->androidExtParameters;
        }
        if (null !== $this->androidRemind) {
            $res['AndroidRemind'] = $this->androidRemind;
        }
        if (null !== $this->androidNotificationChannel) {
            $res['AndroidNotificationChannel'] = $this->androidNotificationChannel;
        }
        if (null !== $this->androidNotificationXiaomiChannel) {
            $res['AndroidNotificationXiaomiChannel'] = $this->androidNotificationXiaomiChannel;
        }
        if (null !== $this->smsTemplateName) {
            $res['SmsTemplateName'] = $this->smsTemplateName;
        }
        if (null !== $this->smsSignName) {
            $res['SmsSignName'] = $this->smsSignName;
        }
        if (null !== $this->smsParams) {
            $res['SmsParams'] = $this->smsParams;
        }
        if (null !== $this->smsDelaySecs) {
            $res['SmsDelaySecs'] = $this->smsDelaySecs;
        }
        if (null !== $this->smsSendPolicy) {
            $res['SmsSendPolicy'] = $this->smsSendPolicy;
        }
        if (null !== $this->androidNotificationVivoChannel) {
            $res['AndroidNotificationVivoChannel'] = $this->androidNotificationVivoChannel;
        }
        if (null !== $this->androidNotificationHuaweiChannel) {
            $res['AndroidNotificationHuaweiChannel'] = $this->androidNotificationHuaweiChannel;
        }
        if (null !== $this->androidNotificationNotifyId) {
            $res['AndroidNotificationNotifyId'] = $this->androidNotificationNotifyId;
        }
        if (null !== $this->iOSNotificationCollapseId) {
            $res['iOSNotificationCollapseId'] = $this->iOSNotificationCollapseId;
        }
        if (null !== $this->androidRenderStyle) {
            $res['AndroidRenderStyle'] = $this->androidRenderStyle;
        }
        if (null !== $this->androidBigTitle) {
            $res['AndroidBigTitle'] = $this->androidBigTitle;
        }
        if (null !== $this->androidBigBody) {
            $res['AndroidBigBody'] = $this->androidBigBody;
        }
        if (null !== $this->androidXiaomiBigPictureUrl) {
            $res['AndroidXiaomiBigPictureUrl'] = $this->androidXiaomiBigPictureUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
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
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['SendSpeed'])) {
            $model->sendSpeed = $map['SendSpeed'];
        }
        if (isset($map['StoreOffline'])) {
            $model->storeOffline = $map['StoreOffline'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['iOSApnsEnv'])) {
            $model->iOSApnsEnv = $map['iOSApnsEnv'];
        }
        if (isset($map['iOSRemind'])) {
            $model->iOSRemind = $map['iOSRemind'];
        }
        if (isset($map['iOSRemindBody'])) {
            $model->iOSRemindBody = $map['iOSRemindBody'];
        }
        if (isset($map['iOSBadge'])) {
            $model->iOSBadge = $map['iOSBadge'];
        }
        if (isset($map['iOSBadgeAutoIncrement'])) {
            $model->iOSBadgeAutoIncrement = $map['iOSBadgeAutoIncrement'];
        }
        if (isset($map['iOSSilentNotification'])) {
            $model->iOSSilentNotification = $map['iOSSilentNotification'];
        }
        if (isset($map['iOSMusic'])) {
            $model->iOSMusic = $map['iOSMusic'];
        }
        if (isset($map['iOSSubtitle'])) {
            $model->iOSSubtitle = $map['iOSSubtitle'];
        }
        if (isset($map['iOSNotificationCategory'])) {
            $model->iOSNotificationCategory = $map['iOSNotificationCategory'];
        }
        if (isset($map['iOSMutableContent'])) {
            $model->iOSMutableContent = $map['iOSMutableContent'];
        }
        if (isset($map['iOSExtParameters'])) {
            $model->iOSExtParameters = $map['iOSExtParameters'];
        }
        if (isset($map['AndroidNotifyType'])) {
            $model->androidNotifyType = $map['AndroidNotifyType'];
        }
        if (isset($map['AndroidOpenType'])) {
            $model->androidOpenType = $map['AndroidOpenType'];
        }
        if (isset($map['AndroidActivity'])) {
            $model->androidActivity = $map['AndroidActivity'];
        }
        if (isset($map['AndroidMusic'])) {
            $model->androidMusic = $map['AndroidMusic'];
        }
        if (isset($map['AndroidOpenUrl'])) {
            $model->androidOpenUrl = $map['AndroidOpenUrl'];
        }
        if (isset($map['AndroidXiaoMiActivity'])) {
            $model->androidXiaoMiActivity = $map['AndroidXiaoMiActivity'];
        }
        if (isset($map['AndroidXiaoMiNotifyTitle'])) {
            $model->androidXiaoMiNotifyTitle = $map['AndroidXiaoMiNotifyTitle'];
        }
        if (isset($map['AndroidXiaoMiNotifyBody'])) {
            $model->androidXiaoMiNotifyBody = $map['AndroidXiaoMiNotifyBody'];
        }
        if (isset($map['AndroidPopupActivity'])) {
            $model->androidPopupActivity = $map['AndroidPopupActivity'];
        }
        if (isset($map['AndroidPopupTitle'])) {
            $model->androidPopupTitle = $map['AndroidPopupTitle'];
        }
        if (isset($map['AndroidPopupBody'])) {
            $model->androidPopupBody = $map['AndroidPopupBody'];
        }
        if (isset($map['AndroidNotificationBarType'])) {
            $model->androidNotificationBarType = $map['AndroidNotificationBarType'];
        }
        if (isset($map['AndroidNotificationBarPriority'])) {
            $model->androidNotificationBarPriority = $map['AndroidNotificationBarPriority'];
        }
        if (isset($map['AndroidExtParameters'])) {
            $model->androidExtParameters = $map['AndroidExtParameters'];
        }
        if (isset($map['AndroidRemind'])) {
            $model->androidRemind = $map['AndroidRemind'];
        }
        if (isset($map['AndroidNotificationChannel'])) {
            $model->androidNotificationChannel = $map['AndroidNotificationChannel'];
        }
        if (isset($map['AndroidNotificationXiaomiChannel'])) {
            $model->androidNotificationXiaomiChannel = $map['AndroidNotificationXiaomiChannel'];
        }
        if (isset($map['SmsTemplateName'])) {
            $model->smsTemplateName = $map['SmsTemplateName'];
        }
        if (isset($map['SmsSignName'])) {
            $model->smsSignName = $map['SmsSignName'];
        }
        if (isset($map['SmsParams'])) {
            $model->smsParams = $map['SmsParams'];
        }
        if (isset($map['SmsDelaySecs'])) {
            $model->smsDelaySecs = $map['SmsDelaySecs'];
        }
        if (isset($map['SmsSendPolicy'])) {
            $model->smsSendPolicy = $map['SmsSendPolicy'];
        }
        if (isset($map['AndroidNotificationVivoChannel'])) {
            $model->androidNotificationVivoChannel = $map['AndroidNotificationVivoChannel'];
        }
        if (isset($map['AndroidNotificationHuaweiChannel'])) {
            $model->androidNotificationHuaweiChannel = $map['AndroidNotificationHuaweiChannel'];
        }
        if (isset($map['AndroidNotificationNotifyId'])) {
            $model->androidNotificationNotifyId = $map['AndroidNotificationNotifyId'];
        }
        if (isset($map['iOSNotificationCollapseId'])) {
            $model->iOSNotificationCollapseId = $map['iOSNotificationCollapseId'];
        }
        if (isset($map['AndroidRenderStyle'])) {
            $model->androidRenderStyle = $map['AndroidRenderStyle'];
        }
        if (isset($map['AndroidBigTitle'])) {
            $model->androidBigTitle = $map['AndroidBigTitle'];
        }
        if (isset($map['AndroidBigBody'])) {
            $model->androidBigBody = $map['AndroidBigBody'];
        }
        if (isset($map['AndroidXiaomiBigPictureUrl'])) {
            $model->androidXiaomiBigPictureUrl = $map['AndroidXiaomiBigPictureUrl'];
        }

        return $model;
    }
}
