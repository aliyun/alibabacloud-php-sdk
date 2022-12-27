<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sourceModels;

use AlibabaCloud\Tea\Model;

class sourceModel extends Model
{
    /**
     * @description The address of the origin server.
     *
     * @example example.com
     *
     * @var string
     */
    public $content;

    /**
     * @description The status of the origin server.
     *
     * @example online
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The port over which requests are redirected to the origin server. Ports 443 and 80 are supported.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The priority of the origin server if multiple origin servers are specified.
     *
     * @example 20
     *
     * @var string
     */
    public $priority;

    /**
     * @description The type of the origin server. Valid values:
     *
     *   **ipaddr**: IP address
     *   **domain**: domain name
     *   **oss**: Object Storage Service (OSS) bucket endpoint
     *
     * @example domain
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the origin server if multiple origin servers are specified.
     *
     * @example 10
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'content'  => 'Content',
        'enabled'  => 'Enabled',
        'port'     => 'Port',
        'priority' => 'Priority',
        'type'     => 'Type',
        'weight'   => 'Weight',
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceModel
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
