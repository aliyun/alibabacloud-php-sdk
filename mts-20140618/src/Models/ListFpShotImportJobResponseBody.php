<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotImportJobResponseBody\fpShotImportJobList;
use AlibabaCloud\Tea\Model;

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
        'nonExistIds'         => 'NonExistIds',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpShotImportJobList) {
            $res['FpShotImportJobList'] = [];
            if (null !== $this->fpShotImportJobList && \is_array($this->fpShotImportJobList)) {
                $n = 0;
                foreach ($this->fpShotImportJobList as $item) {
                    $res['FpShotImportJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = $this->nonExistIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFpShotImportJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpShotImportJobList'])) {
            if (!empty($map['FpShotImportJobList'])) {
                $model->fpShotImportJobList = [];
                $n                          = 0;
                foreach ($map['FpShotImportJobList'] as $item) {
                    $model->fpShotImportJobList[$n++] = null !== $item ? fpShotImportJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonExistIds'])) {
            if (!empty($map['NonExistIds'])) {
                $model->nonExistIds = $map['NonExistIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
