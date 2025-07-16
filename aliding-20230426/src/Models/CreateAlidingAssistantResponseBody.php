<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateAlidingAssistantResponseBody extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $alidingAssistantId;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @example https://www.baidu.com
     *
     * @var string
     */
    public $jumpUrl;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'alidingAssistantId' => 'alidingAssistantId',
        'appCode' => 'appCode',
        'jumpUrl' => 'jumpUrl',
        'processInstanceId' => 'processInstanceId',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alidingAssistantId) {
            $res['alidingAssistantId'] = $this->alidingAssistantId;
        }
        if (null !== $this->appCode) {
            $res['appCode'] = $this->appCode;
        }
        if (null !== $this->jumpUrl) {
            $res['jumpUrl'] = $this->jumpUrl;
        }
        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlidingAssistantResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alidingAssistantId'])) {
            $model->alidingAssistantId = $map['alidingAssistantId'];
        }
        if (isset($map['appCode'])) {
            $model->appCode = $map['appCode'];
        }
        if (isset($map['jumpUrl'])) {
            $model->jumpUrl = $map['jumpUrl'];
        }
        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
