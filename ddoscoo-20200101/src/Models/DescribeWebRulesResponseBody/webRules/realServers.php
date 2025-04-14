<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;

use AlibabaCloud\Dara\Model;

class realServers extends Model
{
    /**
     * @var string
     */
    public $realServer;

    /**
     * @var int
     */
    public $rsType;
    protected $_name = [
        'realServer' => 'RealServer',
        'rsType' => 'RsType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }

        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
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
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }

        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }

        return $model;
    }
}
