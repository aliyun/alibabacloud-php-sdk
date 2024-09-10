<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudVendorAccountAKListResponseBody\cloudVendorAccountAKs;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudVendorAccountAKListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeCloudVendorAccountAKListResponseBody extends Model
{
    /**
     * @description The information about the AccessKey pairs.
     *
     * @var cloudVendorAccountAKs[]
     */
    public $cloudVendorAccountAKs;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 1383B0DB-D5D6-4B0C-9E6B-75939C8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudVendorAccountAKs' => 'CloudVendorAccountAKs',
        'pageInfo'              => 'PageInfo',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudVendorAccountAKs) {
            $res['CloudVendorAccountAKs'] = [];
            if (null !== $this->cloudVendorAccountAKs && \is_array($this->cloudVendorAccountAKs)) {
                $n = 0;
                foreach ($this->cloudVendorAccountAKs as $item) {
                    $res['CloudVendorAccountAKs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudVendorAccountAKListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudVendorAccountAKs'])) {
            if (!empty($map['CloudVendorAccountAKs'])) {
                $model->cloudVendorAccountAKs = [];
                $n                            = 0;
                foreach ($map['CloudVendorAccountAKs'] as $item) {
                    $model->cloudVendorAccountAKs[$n++] = null !== $item ? cloudVendorAccountAKs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
