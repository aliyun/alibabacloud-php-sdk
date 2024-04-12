<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody\networkDomains;

use AlibabaCloud\Tea\Model;

class proxiesState extends Model
{
    /**
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example Available
     *
     * @var string
     */
    public $proxyState;
    protected $_name = [
        'nodeType'   => 'NodeType',
        'proxyState' => 'ProxyState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->proxyState) {
            $res['ProxyState'] = $this->proxyState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxiesState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ProxyState'])) {
            $model->proxyState = $map['ProxyState'];
        }

        return $model;
    }
}
