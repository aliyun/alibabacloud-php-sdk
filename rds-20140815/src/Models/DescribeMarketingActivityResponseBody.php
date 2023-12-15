<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMarketingActivityResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeMarketingActivityResponseBody extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1979008652307170
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description *   China site: 26842
     *   International site: 26888
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @description The activity parameters
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The region ID.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 7D8F09DB-1124-5D78-A520-FF88FAF4351B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliUid'    => 'AliUid',
        'bid'       => 'Bid',
        'items'     => 'Items',
        'regionId'  => 'RegionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMarketingActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
