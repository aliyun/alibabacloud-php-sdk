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
     * @var string
     */
    public $mainActivity;

    /**
     * @var string
     */
    public $oppoChannelId;

    /**
     * @var string
     */
    public $vivoCategory;

    /**
     * @var string
     */
    public $xiaomiChannelId;
    protected $_name = [
        'channelActivity'         => 'channelActivity',
        'channelFcm'              => 'channelFcm',
        'huaweiChannelCategory'   => 'huaweiChannelCategory',
        'huaweiChannelImportance' => 'huaweiChannelImportance',
        'mainActivity'            => 'mainActivity',
        'oppoChannelId'           => 'oppoChannelId',
        'vivoCategory'            => 'vivoCategory',
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
        if (null !== $this->mainActivity) {
            $res['mainActivity'] = $this->mainActivity;
        }
        if (null !== $this->oppoChannelId) {
            $res['oppoChannelId'] = $this->oppoChannelId;
        }
        if (null !== $this->vivoCategory) {
            $res['vivoCategory'] = $this->vivoCategory;
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
        if (isset($map['mainActivity'])) {
            $model->mainActivity = $map['mainActivity'];
        }
        if (isset($map['oppoChannelId'])) {
            $model->oppoChannelId = $map['oppoChannelId'];
        }
        if (isset($map['vivoCategory'])) {
            $model->vivoCategory = $map['vivoCategory'];
        }
        if (isset($map['xiaomiChannelId'])) {
            $model->xiaomiChannelId = $map['xiaomiChannelId'];
        }

        return $model;
    }
}
