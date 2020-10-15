<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PreCreateEnsServiceResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $ensServiceId;

    /**
     * @var string
     */
    public $netLevel;

    /**
     * @var string
     */
    public $buyResourcesDetail;
    protected $_name = [
        'requestId'          => 'RequestId',
        'code'               => 'Code',
        'ensServiceId'       => 'EnsServiceId',
        'netLevel'           => 'NetLevel',
        'buyResourcesDetail' => 'BuyResourcesDetail',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('ensServiceId', $this->ensServiceId, true);
        Model::validateRequired('netLevel', $this->netLevel, true);
        Model::validateRequired('buyResourcesDetail', $this->buyResourcesDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }
        if (null !== $this->netLevel) {
            $res['NetLevel'] = $this->netLevel;
        }
        if (null !== $this->buyResourcesDetail) {
            $res['BuyResourcesDetail'] = $this->buyResourcesDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCreateEnsServiceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }
        if (isset($map['NetLevel'])) {
            $model->netLevel = $map['NetLevel'];
        }
        if (isset($map['BuyResourcesDetail'])) {
            $model->buyResourcesDetail = $map['BuyResourcesDetail'];
        }

        return $model;
    }
}
