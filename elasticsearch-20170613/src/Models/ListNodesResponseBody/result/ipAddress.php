<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody\result;

use AlibabaCloud\Tea\Model;

class ipAddress extends Model
{
    /**
     * @var string
     */
    public $ipType;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'ipType' => 'ipType',
        'host'   => 'host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipType) {
            $res['ipType'] = $this->ipType;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
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
        if (isset($map['ipType'])) {
            $model->ipType = $map['ipType'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        return $model;
    }
}
