<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody\customSemanticSearchConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody\data;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody\thirdSearchConfig;

class ListDatasetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var customSemanticSearchConfig
     */
    public $customSemanticSearchConfig;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var thirdSearchConfig
     */
    public $thirdSearchConfig;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'customSemanticSearchConfig' => 'CustomSemanticSearchConfig',
        'data' => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'thirdSearchConfig' => 'ThirdSearchConfig',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->customSemanticSearchConfig) {
            $this->customSemanticSearchConfig->validate();
        }
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->thirdSearchConfig) {
            $this->thirdSearchConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->customSemanticSearchConfig) {
            $res['CustomSemanticSearchConfig'] = null !== $this->customSemanticSearchConfig ? $this->customSemanticSearchConfig->toArray($noStream) : $this->customSemanticSearchConfig;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->thirdSearchConfig) {
            $res['ThirdSearchConfig'] = null !== $this->thirdSearchConfig ? $this->thirdSearchConfig->toArray($noStream) : $this->thirdSearchConfig;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['CustomSemanticSearchConfig'])) {
            $model->customSemanticSearchConfig = customSemanticSearchConfig::fromMap($map['CustomSemanticSearchConfig']);
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1++] = data::fromMap($item1);
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['ThirdSearchConfig'])) {
            $model->thirdSearchConfig = thirdSearchConfig::fromMap($map['ThirdSearchConfig']);
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
