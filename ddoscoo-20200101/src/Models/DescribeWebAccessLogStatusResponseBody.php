<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebAccessLogStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Logstore of the instance.
     *
     * @example ddoscoo-logstore
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @description The Log Service project of the instance.
     *
     * @example ddoscoo-project-128965410602****-cn-hangzhou
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description Indicates whether the Log Analysis feature is enabled for the website. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $slsStatus;
    protected $_name = [
        'requestId'   => 'RequestId',
        'slsLogstore' => 'SlsLogstore',
        'slsProject'  => 'SlsProject',
        'slsStatus'   => 'SlsStatus',
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
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsStatus) {
            $res['SlsStatus'] = $this->slsStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsStatus'])) {
            $model->slsStatus = $map['SlsStatus'];
        }

        return $model;
    }
}
