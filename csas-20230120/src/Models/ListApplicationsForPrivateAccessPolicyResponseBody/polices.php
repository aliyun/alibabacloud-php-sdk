<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyResponseBody\polices\applications;
use AlibabaCloud\Tea\Model;

class polices extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @example pa-policy-1b0d0e8b4bcf****
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'applications' => 'Applications',
        'policyId'     => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return polices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
