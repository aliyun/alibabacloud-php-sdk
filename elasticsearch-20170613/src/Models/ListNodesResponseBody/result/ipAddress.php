<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody\result;

use AlibabaCloud\Dara\Model;

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
        'host' => 'host',
        'ipType' => 'ipType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
