<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $elasticACU;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $reserverdCompteACU;

    /**
     * @var string
     */
    public $reserverdStorageACU;

    /**
     * @var string
     */
    public $resourceGroupCount;
    protected $_name = [
        'elasticACU' => 'ElasticACU',
        'requestId' => 'RequestId',
        'reserverdCompteACU' => 'ReserverdCompteACU',
        'reserverdStorageACU' => 'ReserverdStorageACU',
        'resourceGroupCount' => 'ResourceGroupCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
