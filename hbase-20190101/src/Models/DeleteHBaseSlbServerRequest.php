<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteHBaseSlbServerRequest extends Model
{
    /**
     * @example hb-t4naqsay5gn****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example thrift
     *
     * @var string
     */
    public $slbServer;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'slbServer' => 'SlbServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->slbServer) {
            $res['SlbServer'] = $this->slbServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHBaseSlbServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SlbServer'])) {
            $model->slbServer = $map['SlbServer'];
        }

        return $model;
    }
}
