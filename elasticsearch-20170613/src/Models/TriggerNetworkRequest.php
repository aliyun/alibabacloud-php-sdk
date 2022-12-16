<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class TriggerNetworkRequest extends Model
{
    /**
     * @example OPEN
     *
     * @var string
     */
    public $actionType;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example KIBANA
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 407d02b74c49beb5bfdac7ec8bde2488
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'actionType'  => 'actionType',
        'networkType' => 'networkType',
        'nodeType'    => 'nodeType',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
