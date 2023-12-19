<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request\rules;
use AlibabaCloud\Tea\Model;

class UpdatePolicyV2Request extends Model
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
     * @description The ID of the backup policy.
     *
     * @example po-000************viy
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
    protected $_name = [
        'policyDescription' => 'PolicyDescription',
        'policyId'          => 'PolicyId',
        'policyName'        => 'PolicyName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePolicyV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
