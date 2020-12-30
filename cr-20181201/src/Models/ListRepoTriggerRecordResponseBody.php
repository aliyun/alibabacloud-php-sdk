<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRecordResponseBody\repoTriggerRecords;
use AlibabaCloud\Tea\Model;

class ListRepoTriggerRecordResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var repoTriggerRecords[]
     */
    public $repoTriggerRecords;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'          => 'IsSuccess',
        'requestId'          => 'RequestId',
        'repoTriggerRecords' => 'RepoTriggerRecords',
        'code'               => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->repoTriggerRecords) {
            $res['RepoTriggerRecords'] = [];
            if (null !== $this->repoTriggerRecords && \is_array($this->repoTriggerRecords)) {
                $n = 0;
                foreach ($this->repoTriggerRecords as $item) {
                    $res['RepoTriggerRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoTriggerRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RepoTriggerRecords'])) {
            if (!empty($map['RepoTriggerRecords'])) {
                $model->repoTriggerRecords = [];
                $n                         = 0;
                foreach ($map['RepoTriggerRecords'] as $item) {
                    $model->repoTriggerRecords[$n++] = null !== $item ? repoTriggerRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
