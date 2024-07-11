<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7UsKeepaliveResponseBody;

use AlibabaCloud\Tea\Model;

class rsKeepalive extends Model
{
    /**
     * @description Indicates whether Back-to-origin Persistent Connections is turned on. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The number of requests that reuse persistent connections.
     *
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @description The timeout period of idle persistent connections.
     *
     * @example 30
     *
     * @var int
     */
    public $keepaliveTimeout;
    protected $_name = [
        'enabled'           => 'Enabled',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout'  => 'KeepaliveTimeout',
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
        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }
        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rsKeepalive
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }
        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
        }

        return $model;
    }
}
