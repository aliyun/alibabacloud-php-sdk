<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The parameter that is used to ensure that the modified resource is consistent with the resource to be modified. The value of this parameter is returned in the responses of the [CreateFunction](~~415747~~), [GetFunction](~~415750~~), and [UpdateFunction](~~415749~~) operations.
     *
     * @example e19d5cd5af0378da05f63f891c7467af
     *
     * @var string
     */
    public $ifMatch;

    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description The CRC-64 value of the function code package.
     *
     * @example 1506052139770049xxxx
     *
     * @var string
     */
    public $xFcCodeChecksum;

    /**
     * @description The time on which the function is invoked. The format of the value is: **EEE,d MMM yyyy HH:mm:ss GMT**.
     *
     * @example Wed, 11 May 2022 09:00:00 GMT
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description The trace ID of the request. The value is the same as that of the requestId parameter in the response.
     *
     * @example test-trace-id
     *
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'ifMatch'         => 'If-Match',
        'xFcAccountId'    => 'X-Fc-Account-Id',
        'xFcCodeChecksum' => 'X-Fc-Code-Checksum',
        'xFcDate'         => 'X-Fc-Date',
        'xFcTraceId'      => 'X-Fc-Trace-Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->ifMatch) {
            $res['If-Match'] = $this->ifMatch;
        }
        if (null !== $this->xFcAccountId) {
            $res['X-Fc-Account-Id'] = $this->xFcAccountId;
        }
        if (null !== $this->xFcCodeChecksum) {
            $res['X-Fc-Code-Checksum'] = $this->xFcCodeChecksum;
        }
        if (null !== $this->xFcDate) {
            $res['X-Fc-Date'] = $this->xFcDate;
        }
        if (null !== $this->xFcTraceId) {
            $res['X-Fc-Trace-Id'] = $this->xFcTraceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['If-Match'])) {
            $model->ifMatch = $map['If-Match'];
        }
        if (isset($map['X-Fc-Account-Id'])) {
            $model->xFcAccountId = $map['X-Fc-Account-Id'];
        }
        if (isset($map['X-Fc-Code-Checksum'])) {
            $model->xFcCodeChecksum = $map['X-Fc-Code-Checksum'];
        }
        if (isset($map['X-Fc-Date'])) {
            $model->xFcDate = $map['X-Fc-Date'];
        }
        if (isset($map['X-Fc-Trace-Id'])) {
            $model->xFcTraceId = $map['X-Fc-Trace-Id'];
        }

        return $model;
    }
}
