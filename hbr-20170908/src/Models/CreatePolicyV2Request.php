<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request\rules;
use AlibabaCloud\Tea\Model;

class CreatePolicyV2Request extends Model
{
    /**
     * @description The description of the backup policy.
     *
     * @example Data is backed up at 10:00:00 every day and replicated to the China (Shanghai) region for geo-redundancy.
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The name of the backup policy.
     *
     * @example Daily Local Backup + Remote Backup
     *
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @description The rules in the backup policy.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'policyDescription' => 'PolicyDescription',
        'policyName'        => 'PolicyName',
        'policyType'        => 'PolicyType',
        'rules'             => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
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

        return $model;
    }
}
