<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponseBody\callDownloads;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponseBody\callUploads;
use AlibabaCloud\Tea\Model;

class DescribeApiTrafficDataResponseBody extends Model
{
    /**
     * @description The value corresponding to the monitoring metric.
     *
     * @var callDownloads
     */
    public $callDownloads;

    /**
     * @description The value corresponding to the monitoring metric.
     *
     * @var callUploads
     */
    public $callUploads;

    /**
     * @description The returned uplink traffic data of API calls. It is an array consisting of MonitorItem data.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ001
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callDownloads' => 'CallDownloads',
        'callUploads'   => 'CallUploads',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDownloads) {
            $res['CallDownloads'] = null !== $this->callDownloads ? $this->callDownloads->toMap() : null;
        }
        if (null !== $this->callUploads) {
            $res['CallUploads'] = null !== $this->callUploads ? $this->callUploads->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiTrafficDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDownloads'])) {
            $model->callDownloads = callDownloads::fromMap($map['CallDownloads']);
        }
        if (isset($map['CallUploads'])) {
            $model->callUploads = callUploads::fromMap($map['CallUploads']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
