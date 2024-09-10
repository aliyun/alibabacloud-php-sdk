<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddCheckInstanceResultWhiteListRequest\instanceList;
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

    /**
     * @var instanceList[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'checkGroupId' => 'CheckGroupId',
        'checkId'      => 'CheckId',
        'instanceIds'  => 'InstanceIds',
        'instanceList' => 'InstanceList',
        'remark'       => 'Remark',
        'ruleType'     => 'RuleType',
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
        if (null !== $this->instanceList) {
            $res['InstanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
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
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
