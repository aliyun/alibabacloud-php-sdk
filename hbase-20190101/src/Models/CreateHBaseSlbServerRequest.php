<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateHBaseSlbServerRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $slbServer;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'clusterId'   => 'ClusterId',
        'slbServer'   => 'SlbServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
     * @return CreateHBaseSlbServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SlbServer'])) {
            $model->slbServer = $map['SlbServer'];
        }

        return $model;
    }
}
