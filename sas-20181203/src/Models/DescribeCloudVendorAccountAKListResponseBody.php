<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudVendorAccountAKListResponseBody\cloudVendorAccountAKs;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudVendorAccountAKListResponseBody\pageInfo;

class DescribeCloudVendorAccountAKListResponseBody extends Model
{
    /**
     * @var cloudVendorAccountAKs[]
     */
    public $cloudVendorAccountAKs;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
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
        if (\is_array($this->cloudVendorAccountAKs)) {
            Model::validateArray($this->cloudVendorAccountAKs);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudVendorAccountAKs) {
            if (\is_array($this->cloudVendorAccountAKs)) {
                $res['CloudVendorAccountAKs'] = [];
                $n1                           = 0;
                foreach ($this->cloudVendorAccountAKs as $item1) {
                    $res['CloudVendorAccountAKs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['CloudVendorAccountAKs'])) {
            if (!empty($map['CloudVendorAccountAKs'])) {
                $model->cloudVendorAccountAKs = [];
                $n1                           = 0;
                foreach ($map['CloudVendorAccountAKs'] as $item1) {
                    $model->cloudVendorAccountAKs[$n1++] = cloudVendorAccountAKs::fromMap($item1);
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
