<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserQuotaResponseBody extends Model
{
    /**
     * @example 512ACU
     *
     * @var string
     */
    public $elasticACU;

    /**
     * @example 0322C7FB-4584-5D2A-BF7F-F9036E940C35
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 48ACU
     *
     * @var string
     */
    public $reserverdCompteACU;

    /**
     * @example 24ACU
     *
     * @var string
     */
    public $reserverdStorageACU;

    /**
     * @example 10
     *
     * @var string
     */
    public $resourceGroupCount;
    protected $_name = [
        'elasticACU'          => 'ElasticACU',
        'requestId'           => 'RequestId',
        'reserverdCompteACU'  => 'ReserverdCompteACU',
        'reserverdStorageACU' => 'ReserverdStorageACU',
        'resourceGroupCount'  => 'ResourceGroupCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticACU) {
            $res['ElasticACU'] = $this->elasticACU;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reserverdCompteACU) {
            $res['ReserverdCompteACU'] = $this->reserverdCompteACU;
        }
        if (null !== $this->reserverdStorageACU) {
            $res['ReserverdStorageACU'] = $this->reserverdStorageACU;
        }
        if (null !== $this->resourceGroupCount) {
            $res['ResourceGroupCount'] = $this->resourceGroupCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticACU'])) {
            $model->elasticACU = $map['ElasticACU'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReserverdCompteACU'])) {
            $model->reserverdCompteACU = $map['ReserverdCompteACU'];
        }
        if (isset($map['ReserverdStorageACU'])) {
            $model->reserverdStorageACU = $map['ReserverdStorageACU'];
        }
        if (isset($map['ResourceGroupCount'])) {
            $model->resourceGroupCount = $map['ResourceGroupCount'];
        }

        return $model;
    }
}
