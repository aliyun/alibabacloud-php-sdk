<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;

use AlibabaCloud\Tea\Model;

class attribute extends Model
{
    /**
     * @example your-app-name
     *
     * @var string
     */
    public $app;

    /**
     * @example your-policy-group
     *
     * @var string
     */
    public $policyGroup;
    protected $_name = [
        'app'         => 'app',
        'policyGroup' => 'policyGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['app'] = $this->app;
        }
        if (null !== $this->policyGroup) {
            $res['policyGroup'] = $this->policyGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['app'])) {
            $model->app = $map['app'];
        }
        if (isset($map['policyGroup'])) {
            $model->policyGroup = $map['policyGroup'];
        }

        return $model;
    }
}
