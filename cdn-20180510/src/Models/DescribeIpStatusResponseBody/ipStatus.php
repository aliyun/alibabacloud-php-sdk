<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusResponseBody;

use AlibabaCloud\Tea\Model;

class ipStatus extends Model
{
    /**
     * @description The IP address of the POP.
     *
     * @example 10.10.10.10
     *
     * @var string
     */
    public $ip;

    /**
     * @description The status.
     *
     *   **nonali**: not an Alibaba Cloud CDN POP
     *   **normal**: an available Alibaba Cloud CDN POP
     *   **abnormal**: an unavailable Alibaba Cloud CDN POP
     *
     * @example abnormal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ip' => 'ip',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
