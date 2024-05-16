<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class ListExpressConnectRouterSupportedRegionRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example VBR
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'nodeType'    => 'NodeType',
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
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExpressConnectRouterSupportedRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
