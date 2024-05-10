<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class GetFlowLogServiceStatusResponseBody extends Model
{
    /**
     * @description Indicates whether the flow log feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no You can call the [OpenFlowLogService](https://help.aliyun.com/document_detail/449637.html) operation to enable the flow log feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The ID of the request.
     *
     * @example 54B48E3D-DF70-471B-AA93-06F83A1B457
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enabled'   => 'Enabled',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFlowLogServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
