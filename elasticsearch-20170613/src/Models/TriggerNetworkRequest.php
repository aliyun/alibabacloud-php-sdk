<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class TriggerNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $actionType;
    protected $_name = [
        'clientToken' => 'clientToken',
        'nodeType'    => 'nodeType',
        'networkType' => 'networkType',
        'actionType'  => 'actionType',
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
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }

        return $model;
    }
}
