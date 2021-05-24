<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\associatedObjects\listeners;

use AlibabaCloud\Tea\Model;

class listener extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port'     => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listener
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
