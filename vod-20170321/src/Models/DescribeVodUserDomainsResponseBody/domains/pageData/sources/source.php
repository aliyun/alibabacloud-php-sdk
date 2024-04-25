<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains\pageData\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The address of the origin server.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $content;

    /**
     * @description The port number. Valid values: **443** and **80**.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The priority of the origin server.
     *
     * @example 5
     *
     * @var string
     */
    public $priority;

    /**
     * @description The type of the origin server. Valid values:
     *
     *   **ipaddr**: an IP address.
     *   **domain**: an origin domain name
     *   **oss**: the OSS domain of an Object Storage Service (OSS) bucket
     *
     * @example oss
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'  => 'Content',
        'port'     => 'Port',
        'priority' => 'Priority',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
