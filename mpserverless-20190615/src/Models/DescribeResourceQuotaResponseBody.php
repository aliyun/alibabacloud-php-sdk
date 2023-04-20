<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceQuotaResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var float
     */
    public $cloudStorageDataSizeQuota;

    /**
     * @example C293BB03-B6AD-46C2-80D1-19C8FB573916
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var float
     */
    public $staticWebDataSizeQuota;
    protected $_name = [
        'cloudStorageDataSizeQuota' => 'CloudStorageDataSizeQuota',
        'requestId'                 => 'RequestId',
        'staticWebDataSizeQuota'    => 'StaticWebDataSizeQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudStorageDataSizeQuota) {
            $res['CloudStorageDataSizeQuota'] = $this->cloudStorageDataSizeQuota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->staticWebDataSizeQuota) {
            $res['StaticWebDataSizeQuota'] = $this->staticWebDataSizeQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudStorageDataSizeQuota'])) {
            $model->cloudStorageDataSizeQuota = $map['CloudStorageDataSizeQuota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StaticWebDataSizeQuota'])) {
            $model->staticWebDataSizeQuota = $map['StaticWebDataSizeQuota'];
        }

        return $model;
    }
}
