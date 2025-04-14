<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeL7RsPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'domain' => 'Domain',
        'realServers' => 'RealServers',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->realServers)) {
            Model::validateArray($this->realServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->realServers) {
            if (\is_array($this->realServers)) {
                $res['RealServers'] = [];
                $n1 = 0;
                foreach ($this->realServers as $item1) {
                    $res['RealServers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n1 = 0;
                foreach ($map['RealServers'] as $item1) {
                    $model->realServers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
