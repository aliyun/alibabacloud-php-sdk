<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList;

class GetTranscodeSummaryResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeSummaryList[]
     */
    public $transcodeSummaryList;
    protected $_name = [
        'nonExistVideoIds' => 'NonExistVideoIds',
        'requestId' => 'RequestId',
        'transcodeSummaryList' => 'TranscodeSummaryList',
    ];

    public function validate()
    {
        if (\is_array($this->nonExistVideoIds)) {
            Model::validateArray($this->nonExistVideoIds);
        }
        if (\is_array($this->transcodeSummaryList)) {
            Model::validateArray($this->transcodeSummaryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistVideoIds) {
            if (\is_array($this->nonExistVideoIds)) {
                $res['NonExistVideoIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistVideoIds as $item1) {
                    $res['NonExistVideoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeSummaryList) {
            if (\is_array($this->transcodeSummaryList)) {
                $res['TranscodeSummaryList'] = [];
                $n1 = 0;
                foreach ($this->transcodeSummaryList as $item1) {
                    $res['TranscodeSummaryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = [];
                $n1 = 0;
                foreach ($map['NonExistVideoIds'] as $item1) {
                    $model->nonExistVideoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TranscodeSummaryList'])) {
            if (!empty($map['TranscodeSummaryList'])) {
                $model->transcodeSummaryList = [];
                $n1 = 0;
                foreach ($map['TranscodeSummaryList'] as $item1) {
                    $model->transcodeSummaryList[$n1] = transcodeSummaryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
