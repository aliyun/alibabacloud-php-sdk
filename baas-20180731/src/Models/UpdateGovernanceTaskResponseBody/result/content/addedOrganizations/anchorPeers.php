<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\UpdateGovernanceTaskResponseBody\result\content\addedOrganizations;

use AlibabaCloud\Tea\Model;

class anchorPeers extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anchorPeers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
