<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The address of the origin server.
     *
     * @example ****.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $content;

    /**
     * @description The status of the origin server. Valid values:
     *   **online**: indicates that the origin server is enabled.
     *   **offline**: indicates that the origin server is disabled.
     *
     * @example online
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The port number. Valid values: 443 and 80.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The priority of the origin server.
     *
     * @example 50
     *
     * @var string
     */
    public $priority;

    /**
     * @description The type of the origin server. Valid values:
     *   **ipaddr**: a server that you can access by using an IP address.
     *   **domain**: a server that you can access by using a domain name.
     *   **oss**: the URL of an Object Storage Service (OSS) bucket.
     *
     * @example oss
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'  => 'Content',
        'enabled'  => 'Enabled',
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
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
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
