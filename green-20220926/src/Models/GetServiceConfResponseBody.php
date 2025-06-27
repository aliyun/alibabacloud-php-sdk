<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetServiceConfResponseBody extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var int
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $customServiceConf;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var mixed[]
     */
    public $option;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'classify' => 'Classify',
        'code' => 'Code',
        'customServiceConf' => 'CustomServiceConf',
        'gmtModified' => 'GmtModified',
        'msg' => 'Msg',
        'option' => 'Option',
        'requestId' => 'RequestId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'serviceType' => 'ServiceType',
        'success' => 'Success',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (\is_array($this->customServiceConf)) {
            Model::validateArray($this->customServiceConf);
        }
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->customServiceConf) {
            if (\is_array($this->customServiceConf)) {
                $res['CustomServiceConf'] = [];
                foreach ($this->customServiceConf as $key1 => $value1) {
                    $res['CustomServiceConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->option) {
            if (\is_array($this->option)) {
                $res['Option'] = [];
                foreach ($this->option as $key1 => $value1) {
                    $res['Option'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CustomServiceConf'])) {
            if (!empty($map['CustomServiceConf'])) {
                $model->customServiceConf = [];
                foreach ($map['CustomServiceConf'] as $key1 => $value1) {
                    $model->customServiceConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                foreach ($map['Option'] as $key1 => $value1) {
                    $model->option[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
