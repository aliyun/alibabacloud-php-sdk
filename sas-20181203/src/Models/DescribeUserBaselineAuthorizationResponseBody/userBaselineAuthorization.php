<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBaselineAuthorizationResponseBody;

use AlibabaCloud\Tea\Model;

class userBaselineAuthorization extends Model
{
    /**
     * @description Indicates whether Security Center is authorized to run configuration checks on cloud services.
     *
     *   **0**: no. Security Center is not authorized to run configuration checks on cloud services.
     *   **1**: yes. Security Center is authorized to run configuration checks on cloud services.
     *
     * @example 1
     *
     * @var int
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
     * @return userBaselineAuthorization
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
