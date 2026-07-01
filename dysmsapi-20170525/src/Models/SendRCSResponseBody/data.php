<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendRCSResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $bdcust;

    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $debug;

    /**
     * @var string
     */
    public $e;

    /**
     * @var mixed[]
     */
    public $extendMap;

    /**
     * @var string
     */
    public $gateFailMsg;

    /**
     * @var string
     */
    public $keyString;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mixed[]
     */
    public $module;

    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'bdcust' => 'Bdcust',
        'code' => 'Code',
        'debug' => 'Debug',
        'e' => 'E',
        'extendMap' => 'ExtendMap',
        'gateFailMsg' => 'GateFailMsg',
        'keyString' => 'KeyString',
        'message' => 'Message',
        'module' => 'Module',
        'partnerId' => 'PartnerId',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->debug)) {
            Model::validateArray($this->debug);
        }
        if (\is_array($this->extendMap)) {
            Model::validateArray($this->extendMap);
        }
        if (\is_array($this->module)) {
            Model::validateArray($this->module);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->bdcust) {
            $res['Bdcust'] = $this->bdcust;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->debug) {
            if (\is_array($this->debug)) {
                $res['Debug'] = [];
                foreach ($this->debug as $key1 => $value1) {
                    $res['Debug'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->e) {
            $res['E'] = $this->e;
        }

        if (null !== $this->extendMap) {
            if (\is_array($this->extendMap)) {
                $res['ExtendMap'] = [];
                foreach ($this->extendMap as $key1 => $value1) {
                    $res['ExtendMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gateFailMsg) {
            $res['GateFailMsg'] = $this->gateFailMsg;
        }

        if (null !== $this->keyString) {
            $res['KeyString'] = $this->keyString;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->module) {
            if (\is_array($this->module)) {
                $res['Module'] = [];
                foreach ($this->module as $key1 => $value1) {
                    $res['Module'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['Bdcust'])) {
            $model->bdcust = $map['Bdcust'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Debug'])) {
            if (!empty($map['Debug'])) {
                $model->debug = [];
                foreach ($map['Debug'] as $key1 => $value1) {
                    $model->debug[$key1] = $value1;
                }
            }
        }

        if (isset($map['E'])) {
            $model->e = $map['E'];
        }

        if (isset($map['ExtendMap'])) {
            if (!empty($map['ExtendMap'])) {
                $model->extendMap = [];
                foreach ($map['ExtendMap'] as $key1 => $value1) {
                    $model->extendMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['GateFailMsg'])) {
            $model->gateFailMsg = $map['GateFailMsg'];
        }

        if (isset($map['KeyString'])) {
            $model->keyString = $map['KeyString'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Module'])) {
            if (!empty($map['Module'])) {
                $model->module = [];
                foreach ($map['Module'] as $key1 => $value1) {
                    $model->module[$key1] = $value1;
                }
            }
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
