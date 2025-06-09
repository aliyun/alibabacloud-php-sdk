<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\statistics;

use AlibabaCloud\Dara\Model;

class policySourceList extends Model
{
    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyUid;
    protected $_name = [
        'policyName' => 'policyName',
        'policyUid' => 'policyUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
