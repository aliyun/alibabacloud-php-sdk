<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result;

use AlibabaCloud\Tea\Model;

class ipAddress extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $ipType;
    protected $_name = [
        'host'   => 'host',
        'ipType' => 'ipType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->ipType) {
            $res['ipType'] = $this->ipType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['ipType'])) {
            $model->ipType = $map['ipType'];
        }

        return $model;
    }
}
