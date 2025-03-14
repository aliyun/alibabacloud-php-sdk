<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListLogShipperRegionsResponseBody\logShipperRegionList;
use AlibabaCloud\Tea\Model;

class ListLogShipperRegionsResponseBody extends Model
{
    /**
     * @description The regions supported by the log delivery feature.
     *
     * @var logShipperRegionList[]
     */
    public $logShipperRegionList;

    /**
     * @description The request ID.
     *
     * @example F9C4DE22-D242-5ABA-87EC-325ECBDC****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logShipperRegionList' => 'LogShipperRegionList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logShipperRegionList) {
            $res['LogShipperRegionList'] = [];
            if (null !== $this->logShipperRegionList && \is_array($this->logShipperRegionList)) {
                $n = 0;
                foreach ($this->logShipperRegionList as $item) {
                    $res['LogShipperRegionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLogShipperRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogShipperRegionList'])) {
            if (!empty($map['LogShipperRegionList'])) {
                $model->logShipperRegionList = [];
                $n = 0;
                foreach ($map['LogShipperRegionList'] as $item) {
                    $model->logShipperRegionList[$n++] = null !== $item ? logShipperRegionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
