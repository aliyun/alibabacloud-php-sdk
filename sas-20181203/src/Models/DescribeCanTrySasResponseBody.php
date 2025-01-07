<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCanTrySasResponseBody extends Model
{
    /**
     * @description Indicates whether you have the permissions on the trial use of Security Center. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $canTry;

    /**
     * @description The request ID.
     *
     * @example E90DE229-9FC6-58F6-BF4B-03AD6179****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canTry'    => 'CanTry',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCanTrySasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
