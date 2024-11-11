<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class ChannelProperties extends Model
{
    /**
     * @var string
     */
    public $channelActivity;

    /**
     * @var string
     */
    public $channelFcm;

    /**
     * @var string
     */
    public $huaweiChannelCategory;

    /**
     * @var string
     */
    public $huaweiChannelImportance;

    /**
     * @example 取值为"NORMAL"和"HIGH",默认为”NORMAL”
     *
     * @var string
     */
    public $huaweiMessageUrgency;

    /**
     * @var string
     */
    public $mainActivity;

    /**
     * @var string
     */
    public $oppoChannelId;

    /**
     * @example "true" ,默认为"false"，可不填
     *
     * @var string
     */
    public $useHuaweiMessage;

    /**
     * @example "true",默认"false"
     *
     * @var string
     */
    public $vivoAddBadge;

    /**
     * @var string
     */
    public $vivoCategory;

    /**
     * @var string
     */
    public $vivoPushMode;

    /**
     * @var string
     */
    public $xiaomiChannelId;
    protected $_name = [
        'channelActivity'         => 'channelActivity',
        'channelFcm'              => 'channelFcm',
        'huaweiChannelCategory'   => 'huaweiChannelCategory',
        'huaweiChannelImportance' => 'huaweiChannelImportance',
        'huaweiMessageUrgency'    => 'huaweiMessageUrgency',
        'mainActivity'            => 'mainActivity',
        'oppoChannelId'           => 'oppoChannelId',
        'useHuaweiMessage'        => 'useHuaweiMessage',
        'vivoAddBadge'            => 'vivoAddBadge',
        'vivoCategory'            => 'vivoCategory',
        'vivoPushMode'            => 'vivoPushMode',
        'xiaomiChannelId'         => 'xiaomiChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelActivity) {
            $res['channelActivity'] = $this->channelActivity;
        }
        if (null !== $this->channelFcm) {
            $res['channelFcm'] = $this->channelFcm;
        }
        if (null !== $this->huaweiChannelCategory) {
            $res['huaweiChannelCategory'] = $this->huaweiChannelCategory;
        }
        if (null !== $this->huaweiChannelImportance) {
            $res['huaweiChannelImportance'] = $this->huaweiChannelImportance;
        }
        if (null !== $this->huaweiMessageUrgency) {
            $res['huaweiMessageUrgency'] = $this->huaweiMessageUrgency;
        }
        if (null !== $this->mainActivity) {
            $res['mainActivity'] = $this->mainActivity;
        }
        if (null !== $this->oppoChannelId) {
            $res['oppoChannelId'] = $this->oppoChannelId;
        }
        if (null !== $this->useHuaweiMessage) {
            $res['useHuaweiMessage'] = $this->useHuaweiMessage;
        }
        if (null !== $this->vivoAddBadge) {
            $res['vivoAddBadge'] = $this->vivoAddBadge;
        }
        if (null !== $this->vivoCategory) {
            $res['vivoCategory'] = $this->vivoCategory;
        }
        if (null !== $this->vivoPushMode) {
            $res['vivoPushMode'] = $this->vivoPushMode;
        }
        if (null !== $this->xiaomiChannelId) {
            $res['xiaomiChannelId'] = $this->xiaomiChannelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChannelProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channelActivity'])) {
            $model->channelActivity = $map['channelActivity'];
        }
        if (isset($map['channelFcm'])) {
            $model->channelFcm = $map['channelFcm'];
        }
        if (isset($map['huaweiChannelCategory'])) {
            $model->huaweiChannelCategory = $map['huaweiChannelCategory'];
        }
        if (isset($map['huaweiChannelImportance'])) {
            $model->huaweiChannelImportance = $map['huaweiChannelImportance'];
        }
        if (isset($map['huaweiMessageUrgency'])) {
            $model->huaweiMessageUrgency = $map['huaweiMessageUrgency'];
        }
        if (isset($map['mainActivity'])) {
            $model->mainActivity = $map['mainActivity'];
        }
        if (isset($map['oppoChannelId'])) {
            $model->oppoChannelId = $map['oppoChannelId'];
        }
        if (isset($map['useHuaweiMessage'])) {
            $model->useHuaweiMessage = $map['useHuaweiMessage'];
        }
        if (isset($map['vivoAddBadge'])) {
            $model->vivoAddBadge = $map['vivoAddBadge'];
        }
        if (isset($map['vivoCategory'])) {
            $model->vivoCategory = $map['vivoCategory'];
        }
        if (isset($map['vivoPushMode'])) {
            $model->vivoPushMode = $map['vivoPushMode'];
        }
        if (isset($map['xiaomiChannelId'])) {
            $model->xiaomiChannelId = $map['xiaomiChannelId'];
        }

        return $model;
    }
}
