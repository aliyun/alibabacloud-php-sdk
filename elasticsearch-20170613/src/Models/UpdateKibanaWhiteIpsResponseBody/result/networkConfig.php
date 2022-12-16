<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody\result\networkConfig\whiteIpGroupList;
use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @example vpc
     *
     * @var string
     */
    public $type;

    /**
     * @example vpc-bp1jy348ibzulk6hn****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $vsArea;

    /**
     * @example vsw-bp1a0mifpletdd1da****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @var whiteIpGroupList[]
     */
    public $whiteIpGroupList;
    protected $_name = [
        'type'             => 'type',
        'vpcId'            => 'vpcId',
        'vsArea'           => 'vsArea',
        'vswitchId'        => 'vswitchId',
        'whiteIpGroupList' => 'whiteIpGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vsArea) {
            $res['vsArea'] = $this->vsArea;
        }
        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }
        if (null !== $this->whiteIpGroupList) {
            $res['whiteIpGroupList'] = [];
            if (null !== $this->whiteIpGroupList && \is_array($this->whiteIpGroupList)) {
                $n = 0;
                foreach ($this->whiteIpGroupList as $item) {
                    $res['whiteIpGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vsArea'])) {
            $model->vsArea = $map['vsArea'];
        }
        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }
        if (isset($map['whiteIpGroupList'])) {
            if (!empty($map['whiteIpGroupList'])) {
                $model->whiteIpGroupList = [];
                $n                       = 0;
                foreach ($map['whiteIpGroupList'] as $item) {
                    $model->whiteIpGroupList[$n++] = null !== $item ? whiteIpGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
