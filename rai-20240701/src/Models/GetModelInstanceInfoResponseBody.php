<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInstanceInfoResponseBody\harmfulCategoryConfigInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInstanceInfoResponseBody\promptAttackInfoList;

class GetModelInstanceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $easServiceId;

    /**
     * @var string
     */
    public $easServiceName;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var harmfulCategoryConfigInfoList[]
     */
    public $harmfulCategoryConfigInfoList;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $isSupportImage;

    /**
     * @var bool
     */
    public $isSupportText;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $modelCallName;

    /**
     * @var int
     */
    public $modelCategoryId;

    /**
     * @var int
     */
    public $modelInstanceId;

    /**
     * @var int
     */
    public $modelSource;

    /**
     * @var string
     */
    public $modelToken;

    /**
     * @var string
     */
    public $modelUrl;

    /**
     * @var string
     */
    public $modelVpcUrl;

    /**
     * @var promptAttackInfoList[]
     */
    public $promptAttackInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'easServiceId' => 'EasServiceId',
        'easServiceName' => 'EasServiceName',
        'gmtModified' => 'GmtModified',
        'harmfulCategoryConfigInfoList' => 'HarmfulCategoryConfigInfoList',
        'httpStatusCode' => 'HttpStatusCode',
        'isSupportImage' => 'IsSupportImage',
        'isSupportText' => 'IsSupportText',
        'message' => 'Message',
        'modelCallName' => 'ModelCallName',
        'modelCategoryId' => 'ModelCategoryId',
        'modelInstanceId' => 'ModelInstanceId',
        'modelSource' => 'ModelSource',
        'modelToken' => 'ModelToken',
        'modelUrl' => 'ModelUrl',
        'modelVpcUrl' => 'ModelVpcUrl',
        'promptAttackInfoList' => 'PromptAttackInfoList',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->harmfulCategoryConfigInfoList)) {
            Model::validateArray($this->harmfulCategoryConfigInfoList);
        }
        if (\is_array($this->promptAttackInfoList)) {
            Model::validateArray($this->promptAttackInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->easServiceId) {
            $res['EasServiceId'] = $this->easServiceId;
        }

        if (null !== $this->easServiceName) {
            $res['EasServiceName'] = $this->easServiceName;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->harmfulCategoryConfigInfoList) {
            if (\is_array($this->harmfulCategoryConfigInfoList)) {
                $res['HarmfulCategoryConfigInfoList'] = [];
                $n1 = 0;
                foreach ($this->harmfulCategoryConfigInfoList as $item1) {
                    $res['HarmfulCategoryConfigInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->isSupportImage) {
            $res['IsSupportImage'] = $this->isSupportImage;
        }

        if (null !== $this->isSupportText) {
            $res['IsSupportText'] = $this->isSupportText;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->modelCallName) {
            $res['ModelCallName'] = $this->modelCallName;
        }

        if (null !== $this->modelCategoryId) {
            $res['ModelCategoryId'] = $this->modelCategoryId;
        }

        if (null !== $this->modelInstanceId) {
            $res['ModelInstanceId'] = $this->modelInstanceId;
        }

        if (null !== $this->modelSource) {
            $res['ModelSource'] = $this->modelSource;
        }

        if (null !== $this->modelToken) {
            $res['ModelToken'] = $this->modelToken;
        }

        if (null !== $this->modelUrl) {
            $res['ModelUrl'] = $this->modelUrl;
        }

        if (null !== $this->modelVpcUrl) {
            $res['ModelVpcUrl'] = $this->modelVpcUrl;
        }

        if (null !== $this->promptAttackInfoList) {
            if (\is_array($this->promptAttackInfoList)) {
                $res['PromptAttackInfoList'] = [];
                $n1 = 0;
                foreach ($this->promptAttackInfoList as $item1) {
                    $res['PromptAttackInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EasServiceId'])) {
            $model->easServiceId = $map['EasServiceId'];
        }

        if (isset($map['EasServiceName'])) {
            $model->easServiceName = $map['EasServiceName'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HarmfulCategoryConfigInfoList'])) {
            if (!empty($map['HarmfulCategoryConfigInfoList'])) {
                $model->harmfulCategoryConfigInfoList = [];
                $n1 = 0;
                foreach ($map['HarmfulCategoryConfigInfoList'] as $item1) {
                    $model->harmfulCategoryConfigInfoList[$n1] = harmfulCategoryConfigInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['IsSupportImage'])) {
            $model->isSupportImage = $map['IsSupportImage'];
        }

        if (isset($map['IsSupportText'])) {
            $model->isSupportText = $map['IsSupportText'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ModelCallName'])) {
            $model->modelCallName = $map['ModelCallName'];
        }

        if (isset($map['ModelCategoryId'])) {
            $model->modelCategoryId = $map['ModelCategoryId'];
        }

        if (isset($map['ModelInstanceId'])) {
            $model->modelInstanceId = $map['ModelInstanceId'];
        }

        if (isset($map['ModelSource'])) {
            $model->modelSource = $map['ModelSource'];
        }

        if (isset($map['ModelToken'])) {
            $model->modelToken = $map['ModelToken'];
        }

        if (isset($map['ModelUrl'])) {
            $model->modelUrl = $map['ModelUrl'];
        }

        if (isset($map['ModelVpcUrl'])) {
            $model->modelVpcUrl = $map['ModelVpcUrl'];
        }

        if (isset($map['PromptAttackInfoList'])) {
            if (!empty($map['PromptAttackInfoList'])) {
                $model->promptAttackInfoList = [];
                $n1 = 0;
                foreach ($map['PromptAttackInfoList'] as $item1) {
                    $model->promptAttackInfoList[$n1] = promptAttackInfoList::fromMap($item1);
                    ++$n1;
                }
            }
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
