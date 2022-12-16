<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

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
     * @example vpc-abc
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $vsArea;

    /**
     * @example vsw-def
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'type'      => 'type',
        'vpcId'     => 'vpcId',
        'vsArea'    => 'vsArea',
        'vswitchId' => 'vswitchId',
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

        return $model;
    }
}
