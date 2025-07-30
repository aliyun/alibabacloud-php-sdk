<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeRegionsResponseBody\regionModelList;
use AlibabaCloud\Tea\Model;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @description An array of regions.
     *
     * @var regionModelList[]
     */
    public $regionModelList;

    /**
     * @description The request ID.
     *
     * @example F8900A96-67F7-5274-A41B-7722E1ECF8C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionModelList' => 'RegionModelList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionModelList) {
            $res['RegionModelList'] = [];
            if (null !== $this->regionModelList && \is_array($this->regionModelList)) {
                $n = 0;
                foreach ($this->regionModelList as $item) {
                    $res['RegionModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionModelList'])) {
            if (!empty($map['RegionModelList'])) {
                $model->regionModelList = [];
                $n = 0;
                foreach ($map['RegionModelList'] as $item) {
                    $model->regionModelList[$n++] = null !== $item ? regionModelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
