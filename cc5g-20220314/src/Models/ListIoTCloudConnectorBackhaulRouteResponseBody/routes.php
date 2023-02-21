<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListIoTCloudConnectorBackhaulRouteResponseBody;

use AlibabaCloud\Tea\Model;

class routes extends Model
{
    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example full cidr block route
     *
     * @var string
     */
    public $description;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example 10.33.190.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example eni-uf677iw3xihqxiz2ssir
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example published
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
