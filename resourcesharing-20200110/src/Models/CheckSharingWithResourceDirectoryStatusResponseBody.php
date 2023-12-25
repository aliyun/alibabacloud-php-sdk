<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class CheckSharingWithResourceDirectoryStatusResponseBody extends Model
{
    /**
     * @description Indicates whether resource sharing within a resource directory is enabled. Valid values:
     *
     *   false
     *   true
     *
     * @example true
     *
     * @var bool
     */
    public $enableSharingWithRd;

    /**
     * @description The request ID.
     *
     * @example 819545D0-C97A-5DB3-BD73-A1B17E9A4BC1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enableSharingWithRd' => 'EnableSharingWithRd',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSharingWithRd) {
            $res['EnableSharingWithRd'] = $this->enableSharingWithRd;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSharingWithResourceDirectoryStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSharingWithRd'])) {
            $model->enableSharingWithRd = $map['EnableSharingWithRd'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
