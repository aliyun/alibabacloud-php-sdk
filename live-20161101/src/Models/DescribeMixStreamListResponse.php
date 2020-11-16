<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponse\mixStreamList;
use AlibabaCloud\Tea\Model;

class DescribeMixStreamListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixStreamList[]
     */
    public $mixStreamList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'total'         => 'Total',
        'mixStreamList' => 'MixStreamList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('mixStreamList', $this->mixStreamList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->mixStreamList) {
            $res['MixStreamList'] = [];
            if (null !== $this->mixStreamList && \is_array($this->mixStreamList)) {
                $n = 0;
                foreach ($this->mixStreamList as $item) {
                    $res['MixStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMixStreamListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['MixStreamList'])) {
            if (!empty($map['MixStreamList'])) {
                $model->mixStreamList = [];
                $n                    = 0;
                foreach ($map['MixStreamList'] as $item) {
                    $model->mixStreamList[$n++] = null !== $item ? mixStreamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
