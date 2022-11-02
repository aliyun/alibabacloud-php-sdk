<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsResponseBody\ipList;
use AlibabaCloud\Tea\Model;

class DescribeMajorProtectionBlackIpsResponseBody extends Model
{
    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ipList'     => 'IpList',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMajorProtectionBlackIpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
