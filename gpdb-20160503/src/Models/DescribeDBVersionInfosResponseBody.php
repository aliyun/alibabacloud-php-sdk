<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBVersionInfosResponseBody\versionDetails;

class DescribeDBVersionInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var versionDetails
     */
    public $versionDetails;
    protected $_name = [
        'requestId' => 'RequestId',
        'versionDetails' => 'VersionDetails',
    ];

    public function validate()
    {
        if (null !== $this->versionDetails) {
            $this->versionDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->versionDetails) {
            $res['VersionDetails'] = null !== $this->versionDetails ? $this->versionDetails->toArray($noStream) : $this->versionDetails;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VersionDetails'])) {
            $model->versionDetails = versionDetails::fromMap($map['VersionDetails']);
        }

        return $model;
    }
}
