<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListLogShipperRegionsResponseBody\logShipperRegionList;

class ListLogShipperRegionsResponseBody extends Model
{
    /**
     * @var logShipperRegionList[]
     */
    public $logShipperRegionList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logShipperRegionList' => 'LogShipperRegionList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->logShipperRegionList)) {
            Model::validateArray($this->logShipperRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logShipperRegionList) {
            if (\is_array($this->logShipperRegionList)) {
                $res['LogShipperRegionList'] = [];
                $n1                          = 0;
                foreach ($this->logShipperRegionList as $item1) {
                    $res['LogShipperRegionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogShipperRegionList'])) {
            if (!empty($map['LogShipperRegionList'])) {
                $model->logShipperRegionList = [];
                $n1                          = 0;
                foreach ($map['LogShipperRegionList'] as $item1) {
                    $model->logShipperRegionList[$n1++] = logShipperRegionList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
