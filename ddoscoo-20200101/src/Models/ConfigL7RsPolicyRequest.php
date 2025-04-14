<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigL7RsPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $upstreamRetry;
    protected $_name = [
        'domain' => 'Domain',
        'policy' => 'Policy',
        'resourceGroupId' => 'ResourceGroupId',
        'upstreamRetry' => 'UpstreamRetry',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->upstreamRetry) {
            $res['UpstreamRetry'] = $this->upstreamRetry;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['UpstreamRetry'])) {
            $model->upstreamRetry = $map['UpstreamRetry'];
        }

        return $model;
    }
}
