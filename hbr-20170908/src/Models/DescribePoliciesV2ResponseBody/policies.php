<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The time when the backup policy was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1650248136
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The number of data sources that are bound to the backup policy.
     *
     * @example 5
     *
     * @var int
     */
    public $policyBindingCount;

    /**
     * @description The description of the backup policy.
     *
     * @example Data is backed up at 10:00:00 every day and replicated to the China (Shanghai) region for geo-redundancy.
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The ID of the backup policy.
     *
     * @example po-000************bkz
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the backup policy.
     *
     * @example Daily Local Backup + Remote Backup
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The rules in the backup policy.
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @description The time when the backup policy was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1662080404
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'        => 'CreatedTime',
        'policyBindingCount' => 'PolicyBindingCount',
        'policyDescription'  => 'PolicyDescription',
        'policyId'           => 'PolicyId',
        'policyName'         => 'PolicyName',
        'rules'              => 'Rules',
        'updatedTime'        => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->policyBindingCount) {
            $res['PolicyBindingCount'] = $this->policyBindingCount;
        }
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['PolicyBindingCount'])) {
            $model->policyBindingCount = $map['PolicyBindingCount'];
        }
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
