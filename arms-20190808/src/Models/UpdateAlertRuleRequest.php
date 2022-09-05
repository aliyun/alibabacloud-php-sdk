<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlertRuleRequest extends Model
{
    /**
     * @var int
     */
    public $alertId;

    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var bool
     */
    public $isAutoStart;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templageAlertConfig;
    protected $_name = [
        'alertId'             => 'AlertId',
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'regionId'            => 'RegionId',
        'templageAlertConfig' => 'TemplageAlertConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->isAutoStart) {
            $res['IsAutoStart'] = $this->isAutoStart;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlertRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['IsAutoStart'])) {
            $model->isAutoStart = $map['IsAutoStart'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }

        return $model;
    }
}
