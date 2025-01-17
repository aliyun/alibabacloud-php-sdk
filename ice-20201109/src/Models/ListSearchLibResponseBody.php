<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody\searchLibInfoList;

class ListSearchLibResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var searchLibInfoList[]
     */
    public $searchLibInfoList;
    /**
     * @var string
     */
    public $success;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'              => 'Code',
        'requestId'         => 'RequestId',
        'searchLibInfoList' => 'SearchLibInfoList',
        'success'           => 'Success',
        'total'             => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->searchLibInfoList)) {
            Model::validateArray($this->searchLibInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchLibInfoList) {
            if (\is_array($this->searchLibInfoList)) {
                $res['SearchLibInfoList'] = [];
                $n1                       = 0;
                foreach ($this->searchLibInfoList as $item1) {
                    $res['SearchLibInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchLibInfoList'])) {
            if (!empty($map['SearchLibInfoList'])) {
                $model->searchLibInfoList = [];
                $n1                       = 0;
                foreach ($map['SearchLibInfoList'] as $item1) {
                    $model->searchLibInfoList[$n1++] = searchLibInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
