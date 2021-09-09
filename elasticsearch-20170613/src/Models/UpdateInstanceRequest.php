<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $ignoreStatus;

    /**
     * @var string
     */
    public $orderActionType;
    protected $_name = [
        'clientToken'     => 'clientToken',
        'ignoreStatus'    => 'ignoreStatus',
        'orderActionType' => 'orderActionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->ignoreStatus) {
            $res['ignoreStatus'] = $this->ignoreStatus;
        }
        if (null !== $this->orderActionType) {
            $res['orderActionType'] = $this->orderActionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['ignoreStatus'])) {
            $model->ignoreStatus = $map['ignoreStatus'];
        }
        if (isset($map['orderActionType'])) {
            $model->orderActionType = $map['orderActionType'];
        }

        return $model;
    }
}
