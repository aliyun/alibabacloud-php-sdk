<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackListResponse\packList;
use AlibabaCloud\Tea\Model;

class DescribePackListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var packList[]
     */
    public $packList;
    protected $_name = [
        'requestId' => 'RequestId',
        'packList'  => 'PackList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('packList', $this->packList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->packList) {
            $res['PackList'] = [];
            if (null !== $this->packList && \is_array($this->packList)) {
                $n = 0;
                foreach ($this->packList as $item) {
                    $res['PackList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PackList'])) {
            if (!empty($map['PackList'])) {
                $model->packList = [];
                $n               = 0;
                foreach ($map['PackList'] as $item) {
                    $model->packList[$n++] = null !== $item ? packList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
