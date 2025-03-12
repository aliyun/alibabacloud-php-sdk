<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class realServers extends Model
{
    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $realServer;

    /**
     * @example 0
     *
     * @var int
     */
    public $rsType;
    protected $_name = [
        'realServer' => 'RealServer',
        'rsType'     => 'RsType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return realServers
     */
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
