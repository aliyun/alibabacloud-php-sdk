<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebAccessLogStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var bool
     */
    public $slsStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slsLogstore;
    protected $_name = [
        'slsProject'  => 'SlsProject',
        'slsStatus'   => 'SlsStatus',
        'requestId'   => 'RequestId',
        'slsLogstore' => 'SlsLogstore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsStatus) {
            $res['SlsStatus'] = $this->slsStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebAccessLogStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsStatus'])) {
            $model->slsStatus = $map['SlsStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }

        return $model;
    }
}
