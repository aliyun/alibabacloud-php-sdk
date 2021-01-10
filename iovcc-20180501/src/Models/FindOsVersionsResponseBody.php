<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindOsVersionsResponseBody\osVersionList;
use AlibabaCloud\Tea\Model;

class FindOsVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var osVersionList
     */
    public $osVersionList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'osVersionList' => 'OsVersionList',
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
        if (null !== $this->osVersionList) {
            $res['OsVersionList'] = null !== $this->osVersionList ? $this->osVersionList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindOsVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OsVersionList'])) {
            $model->osVersionList = osVersionList::fromMap($map['OsVersionList']);
        }

        return $model;
    }
}
