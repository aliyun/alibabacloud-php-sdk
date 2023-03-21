<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddCheckInstanceResultWhiteListRequest extends Model
{
    /**
     * @description The ID of the group to which the check item belongs.
     *
     * @example cQFq20UzZ49K6gRSJD1301****
     *
     * @var string
     */
    public $checkGroupId;

    /**
     * @description The ID of the check item.
     *
     * @example 132
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The instance IDs of assets.
     *
     * @var string[]
     */
    public $instanceIds;
    protected $_name = [
        'checkGroupId' => 'CheckGroupId',
        'checkId'      => 'CheckId',
        'instanceIds'  => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkGroupId) {
            $res['CheckGroupId'] = $this->checkGroupId;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCheckInstanceResultWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckGroupId'])) {
            $model->checkGroupId = $map['CheckGroupId'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }

        return $model;
    }
}
