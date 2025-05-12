<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotImportJobResponseBody\fpShotImportJobList;

class ListFpShotImportJobResponseBody extends Model
{
    /**
     * @var fpShotImportJobList[]
     */
    public $fpShotImportJobList;

    /**
     * @var string[]
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpShotImportJobList' => 'FpShotImportJobList',
        'nonExistIds' => 'NonExistIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fpShotImportJobList)) {
            Model::validateArray($this->fpShotImportJobList);
        }
        if (\is_array($this->nonExistIds)) {
            Model::validateArray($this->nonExistIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotImportJobList) {
            if (\is_array($this->fpShotImportJobList)) {
                $res['FpShotImportJobList'] = [];
                $n1 = 0;
                foreach ($this->fpShotImportJobList as $item1) {
                    $res['FpShotImportJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nonExistIds) {
            if (\is_array($this->nonExistIds)) {
                $res['NonExistIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistIds as $item1) {
                    $res['NonExistIds'][$n1++] = $item1;
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
        if (isset($map['FpShotImportJobList'])) {
            if (!empty($map['FpShotImportJobList'])) {
                $model->fpShotImportJobList = [];
                $n1 = 0;
                foreach ($map['FpShotImportJobList'] as $item1) {
                    $model->fpShotImportJobList[$n1++] = fpShotImportJobList::fromMap($item1);
                }
            }
        }

        if (isset($map['NonExistIds'])) {
            if (!empty($map['NonExistIds'])) {
                $model->nonExistIds = [];
                $n1 = 0;
                foreach ($map['NonExistIds'] as $item1) {
                    $model->nonExistIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
