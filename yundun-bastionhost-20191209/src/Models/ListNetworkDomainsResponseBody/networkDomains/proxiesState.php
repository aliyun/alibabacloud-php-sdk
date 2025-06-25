<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody\networkDomains;

use AlibabaCloud\Dara\Model;

class proxiesState extends Model
{
    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $proxyState;
    protected $_name = [
        'nodeType' => 'NodeType',
        'proxyState' => 'ProxyState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
