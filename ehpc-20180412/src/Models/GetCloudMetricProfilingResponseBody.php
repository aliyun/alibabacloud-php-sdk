<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponseBody\svgUrls;
use AlibabaCloud\Tea\Model;

class GetCloudMetricProfilingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var svgUrls
     */
    public $svgUrls;
    protected $_name = [
        'requestId' => 'RequestId',
        'svgUrls'   => 'SvgUrls',
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
        if (null !== $this->svgUrls) {
            $res['SvgUrls'] = null !== $this->svgUrls ? $this->svgUrls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudMetricProfilingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SvgUrls'])) {
            $model->svgUrls = svgUrls::fromMap($map['SvgUrls']);
        }

        return $model;
    }
}
