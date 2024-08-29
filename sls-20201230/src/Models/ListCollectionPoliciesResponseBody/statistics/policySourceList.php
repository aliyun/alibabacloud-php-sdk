<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\statistics;

use AlibabaCloud\Tea\Model;

class policySourceList extends Model
{
    /**
     * @example policy_name1_from148
     *
     * @var string
     */
    public $policyName;

    /**
     * @example 148***********50
     *
     * @var string
     */
    public $policyUid;
    protected $_name = [
        'policyName' => 'policyName',
        'policyUid'  => 'policyUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }
        if (null !== $this->policyUid) {
            $res['policyUid'] = $this->policyUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policySourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }
        if (isset($map['policyUid'])) {
            $model->policyUid = $map['policyUid'];
        }

        return $model;
    }
}
