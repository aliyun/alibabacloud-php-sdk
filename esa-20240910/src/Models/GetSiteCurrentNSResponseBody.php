<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSiteCurrentNSResponseBody extends Model
{
    /**
     * @description The nameservers of the website.
     *
     * @var string[]
     */
    public $NSList;

    /**
     * @description The request ID.
     *
     * @example 2430E05E-1340-5773-B5E1-B743929F46F2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'NSList'    => 'NSList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->NSList) {
            $res['NSList'] = $this->NSList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSiteCurrentNSResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NSList'])) {
            if (!empty($map['NSList'])) {
                $model->NSList = $map['NSList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
