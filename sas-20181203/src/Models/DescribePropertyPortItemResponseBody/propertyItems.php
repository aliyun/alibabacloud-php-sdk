<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyItems extends Model
{
    /**
     * @description The number of servers that use the port.
     *
     * @example 495
     *
     * @var int
     */
    public $count;

    /**
     * @description The number of the listening port.
     *
     * @example 22
     *
     * @var string
     */
    public $port;

    /**
     * @description The network protocol of the port.
     *
     * @example tcp
     *
     * @var string
     */
    public $proto;
    protected $_name = [
        'count' => 'Count',
        'port'  => 'Port',
        'proto' => 'Proto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }

        return $model;
    }
}
