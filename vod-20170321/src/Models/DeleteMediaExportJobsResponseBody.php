<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteMediaExportJobsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedJobIds;

    /**
     * @var string[]
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedJobIds' => 'FailedJobIds',
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedJobIds)) {
            Model::validateArray($this->failedJobIds);
        }
        if (\is_array($this->nonExistJobIds)) {
            Model::validateArray($this->nonExistJobIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedJobIds) {
            if (\is_array($this->failedJobIds)) {
                $res['FailedJobIds'] = [];
                $n1 = 0;
                foreach ($this->failedJobIds as $item1) {
                    $res['FailedJobIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistJobIds) {
            if (\is_array($this->nonExistJobIds)) {
                $res['NonExistJobIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistJobIds as $item1) {
                    $res['NonExistJobIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailedJobIds'])) {
            if (!empty($map['FailedJobIds'])) {
                $model->failedJobIds = [];
                $n1 = 0;
                foreach ($map['FailedJobIds'] as $item1) {
                    $model->failedJobIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistJobIds'])) {
            if (!empty($map['NonExistJobIds'])) {
                $model->nonExistJobIds = [];
                $n1 = 0;
                foreach ($map['NonExistJobIds'] as $item1) {
                    $model->nonExistJobIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
