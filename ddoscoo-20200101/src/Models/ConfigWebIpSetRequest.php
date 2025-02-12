<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigWebIpSetRequest extends Model
{
    /**
     * @var string[]
     */
    public $blackList;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList'       => 'BlackList',
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
        'whiteList'       => 'WhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->blackList)) {
            Model::validateArray($this->blackList);
        }
        if (\is_array($this->whiteList)) {
            Model::validateArray($this->whiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackList) {
            if (\is_array($this->blackList)) {
                $res['BlackList'] = [];
                $n1               = 0;
                foreach ($this->blackList as $item1) {
                    $res['BlackList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->whiteList) {
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1               = 0;
                foreach ($this->whiteList as $item1) {
                    $res['WhiteList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = [];
                $n1               = 0;
                foreach ($map['BlackList'] as $item1) {
                    $model->blackList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = [];
                $n1               = 0;
                foreach ($map['WhiteList'] as $item1) {
                    $model->whiteList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
