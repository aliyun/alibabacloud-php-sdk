<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponseBody\labels;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponseBody\searchTaskInfoList;

class SearchTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var searchTaskInfoList[]
     */
    public $searchTaskInfoList;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string[]
     */
    public $variableNames;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'labels' => 'Labels',
        'message' => 'Message',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'searchTaskInfoList' => 'SearchTaskInfoList',
        'success' => 'Success',
        'total' => 'Total',
        'variableNames' => 'VariableNames',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->searchTaskInfoList)) {
            Model::validateArray($this->searchTaskInfoList);
        }
        if (\is_array($this->variableNames)) {
            Model::validateArray($this->variableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchTaskInfoList) {
            if (\is_array($this->searchTaskInfoList)) {
                $res['SearchTaskInfoList'] = [];
                $n1 = 0;
                foreach ($this->searchTaskInfoList as $item1) {
                    $res['SearchTaskInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->variableNames) {
            if (\is_array($this->variableNames)) {
                $res['VariableNames'] = [];
                $n1 = 0;
                foreach ($this->variableNames as $item1) {
                    $res['VariableNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchTaskInfoList'])) {
            if (!empty($map['SearchTaskInfoList'])) {
                $model->searchTaskInfoList = [];
                $n1 = 0;
                foreach ($map['SearchTaskInfoList'] as $item1) {
                    $model->searchTaskInfoList[$n1] = searchTaskInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['VariableNames'])) {
            if (!empty($map['VariableNames'])) {
                $model->variableNames = [];
                $n1 = 0;
                foreach ($map['VariableNames'] as $item1) {
                    $model->variableNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
