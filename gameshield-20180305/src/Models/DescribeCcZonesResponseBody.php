<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeCcZonesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var string[]
     */
    public $zoneList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'promptInfo' => 'PromptInfo',
        'zoneList'   => 'ZoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->zoneList) {
            $res['ZoneList'] = $this->zoneList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['ZoneList'])) {
            if (!empty($map['ZoneList'])) {
                $model->zoneList = $map['ZoneList'];
            }
        }

        return $model;
    }
}
