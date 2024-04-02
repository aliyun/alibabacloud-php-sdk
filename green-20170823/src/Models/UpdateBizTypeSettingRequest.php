<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateBizTypeSettingRequest extends Model
{
    /**
     * @var string
     */
    public $ad;

    /**
     * @var string
     */
    public $antispam;

    /**
     * @var string
     */
    public $bizTypeName;

    /**
     * @var string
     */
    public $live;

    /**
     * @var string
     */
    public $porn;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $terrorism;
    protected $_name = [
        'ad'           => 'Ad',
        'antispam'     => 'Antispam',
        'bizTypeName'  => 'BizTypeName',
        'live'         => 'Live',
        'porn'         => 'Porn',
        'resourceType' => 'ResourceType',
        'terrorism'    => 'Terrorism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ad) {
            $res['Ad'] = $this->ad;
        }
        if (null !== $this->antispam) {
            $res['Antispam'] = $this->antispam;
        }
        if (null !== $this->bizTypeName) {
            $res['BizTypeName'] = $this->bizTypeName;
        }
        if (null !== $this->live) {
            $res['Live'] = $this->live;
        }
        if (null !== $this->porn) {
            $res['Porn'] = $this->porn;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = $this->terrorism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBizTypeSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ad'])) {
            $model->ad = $map['Ad'];
        }
        if (isset($map['Antispam'])) {
            $model->antispam = $map['Antispam'];
        }
        if (isset($map['BizTypeName'])) {
            $model->bizTypeName = $map['BizTypeName'];
        }
        if (isset($map['Live'])) {
            $model->live = $map['Live'];
        }
        if (isset($map['Porn'])) {
            $model->porn = $map['Porn'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Terrorism'])) {
            $model->terrorism = $map['Terrorism'];
        }

        return $model;
    }
}
