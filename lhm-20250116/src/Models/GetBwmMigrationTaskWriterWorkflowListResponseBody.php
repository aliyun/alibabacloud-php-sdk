<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetBwmMigrationTaskWriterWorkflowListResponseBody\data;

class GetBwmMigrationTaskWriterWorkflowListResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var bool
     */
    public $empty;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var bool
     */
    public $notEmpty;

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
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'data' => 'data',
        'empty' => 'empty',
        'errCode' => 'errCode',
        'errMessage' => 'errMessage',
        'notEmpty' => 'notEmpty',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'success' => 'success',
        'totalCount' => 'totalCount',
        'totalPages' => 'totalPages',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->empty) {
            $res['empty'] = $this->empty;
        }

        if (null !== $this->errCode) {
            $res['errCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['errMessage'] = $this->errMessage;
        }

        if (null !== $this->notEmpty) {
            $res['notEmpty'] = $this->notEmpty;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->totalPages) {
            $res['totalPages'] = $this->totalPages;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['empty'])) {
            $model->empty = $map['empty'];
        }

        if (isset($map['errCode'])) {
            $model->errCode = $map['errCode'];
        }

        if (isset($map['errMessage'])) {
            $model->errMessage = $map['errMessage'];
        }

        if (isset($map['notEmpty'])) {
            $model->notEmpty = $map['notEmpty'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['totalPages'])) {
            $model->totalPages = $map['totalPages'];
        }

        return $model;
    }
}
