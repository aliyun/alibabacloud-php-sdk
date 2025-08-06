<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageRegionListResponseBody\regionList;

class GetStorageRegionListResponseBody extends Model
{
    /**
     * @var regionList
     */
    public $regionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionList' => 'RegionList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->regionList) {
            $this->regionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionList) {
            $res['RegionList'] = null !== $this->regionList ? $this->regionList->toArray($noStream) : $this->regionList;
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
        if (isset($map['RegionList'])) {
            $model->regionList = regionList::fromMap($map['RegionList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
