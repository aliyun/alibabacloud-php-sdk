<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusResponseBody\aegisClientInvokeStatusResponseList;
use AlibabaCloud\Tea\Model;

class DescribeAgentInstallStatusResponseBody extends Model
{
    /**
     * @description The status of servers.
     *
     * @var aegisClientInvokeStatusResponseList[]
     */
    public $aegisClientInvokeStatusResponseList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB3936FA7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aegisClientInvokeStatusResponseList' => 'AegisClientInvokeStatusResponseList',
        'requestId'                           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aegisClientInvokeStatusResponseList) {
            $res['AegisClientInvokeStatusResponseList'] = [];
            if (null !== $this->aegisClientInvokeStatusResponseList && \is_array($this->aegisClientInvokeStatusResponseList)) {
                $n = 0;
                foreach ($this->aegisClientInvokeStatusResponseList as $item) {
                    $res['AegisClientInvokeStatusResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAgentInstallStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisClientInvokeStatusResponseList'])) {
            if (!empty($map['AegisClientInvokeStatusResponseList'])) {
                $model->aegisClientInvokeStatusResponseList = [];
                $n                                          = 0;
                foreach ($map['AegisClientInvokeStatusResponseList'] as $item) {
                    $model->aegisClientInvokeStatusResponseList[$n++] = null !== $item ? aegisClientInvokeStatusResponseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
