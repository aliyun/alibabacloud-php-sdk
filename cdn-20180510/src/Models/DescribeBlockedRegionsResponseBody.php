<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeBlockedRegionsResponseBody\infoList;
use AlibabaCloud\Tea\Model;

class DescribeBlockedRegionsResponseBody extends Model
{
    /**
     * @description A list of countries and regions.
     *
     * @var infoList
     */
    public $infoList;

    /**
     * @description The ID of the request.
     *
     * @example BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'infoList'  => 'InfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoList) {
            $res['InfoList'] = null !== $this->infoList ? $this->infoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBlockedRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoList'])) {
            $model->infoList = infoList::fromMap($map['InfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
