<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengverifyagent\V20240131\Models;

use AlibabaCloud\Tea\Model;

class GetMobileWithTokenRequest extends Model
{
    /**
     * @var int
     */
    public $apiCode;

    /**
     * @var int
     */
    public $operatorId;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $schemeCode;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'apiCode'    => 'apiCode',
        'operatorId' => 'operatorId',
        'osType'     => 'osType',
        'schemeCode' => 'schemeCode',
        'token'      => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCode) {
            $res['apiCode'] = $this->apiCode;
        }
        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }
        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }
        if (null !== $this->schemeCode) {
            $res['schemeCode'] = $this->schemeCode;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMobileWithTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiCode'])) {
            $model->apiCode = $map['apiCode'];
        }
        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }
        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }
        if (isset($map['schemeCode'])) {
            $model->schemeCode = $map['schemeCode'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
