<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBVersionInfosResponseBody\versionDetails;
use AlibabaCloud\Tea\Model;

class DescribeDBVersionInfosResponseBody extends Model
{
    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @var versionDetails
     */
    public $versionDetails;
    protected $_name = [
        'requestId'      => 'RequestId',
        'versionDetails' => 'VersionDetails',
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
        if (null !== $this->versionDetails) {
            $res['VersionDetails'] = null !== $this->versionDetails ? $this->versionDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBVersionInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionDetails'])) {
            $model->versionDetails = versionDetails::fromMap($map['VersionDetails']);
        }

        return $model;
    }
}
