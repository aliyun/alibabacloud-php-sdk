<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthorizationResponseBody;

use AlibabaCloud\Tea\Model;

class authStatus extends Model
{
    /**
     * @description Indicates whether Security Center is authorized to scan images. Valid values:
     * **true**: yes
     * **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
