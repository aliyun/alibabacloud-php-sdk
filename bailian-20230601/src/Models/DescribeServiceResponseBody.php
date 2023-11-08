<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceResponseBody extends Model
{
    /**
     * @example 3e45511d55b54392a40d7b47a16dad28
     *
     * @var string
     */
    public $appId;

    /**
     * @example bailian-qwen-basic-v1-ft-202307111653-d2d7dbff
     *
     * @var string
     */
    public $modelServiceId;

    /**
     * @example 17204B98-7734-4F9A-8464-2446A84821CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example - RUNNING
     * - OFFLINING
     * @var string
     */
    public $status;
    protected $_name = [
        'appId'          => 'AppId',
        'modelServiceId' => 'ModelServiceId',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
