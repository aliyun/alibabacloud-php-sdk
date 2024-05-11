<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlertRulesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [123, 234]
     *
     * @var string
     */
    public $alertIds;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'alertIds' => 'AlertIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertIds) {
            $res['AlertIds'] = $this->alertIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertIds'])) {
            $model->alertIds = $map['AlertIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
