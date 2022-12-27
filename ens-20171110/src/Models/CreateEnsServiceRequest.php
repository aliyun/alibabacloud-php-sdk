<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEnsServiceRequest extends Model
{
    /**
     * @example ens-20190806****
     *
     * @var string
     */
    public $ensServiceId;

    /**
     * @example Buy
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'ensServiceId' => 'EnsServiceId',
        'orderType'    => 'OrderType',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnsServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
