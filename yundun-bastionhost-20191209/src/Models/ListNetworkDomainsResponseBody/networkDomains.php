<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody\networkDomains\proxiesState;

class networkDomains extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $default;

    /**
     * @var string
     */
    public $networkDomainId;

    /**
     * @var string
     */
    public $networkDomainName;

    /**
     * @var string
     */
    public $networkDomainType;

    /**
     * @var proxiesState[]
     */
    public $proxiesState;
    protected $_name = [
        'comment' => 'Comment',
        'default' => 'Default',
        'networkDomainId' => 'NetworkDomainId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'proxiesState' => 'ProxiesState',
    ];

    public function validate()
    {
        if (\is_array($this->proxiesState)) {
            Model::validateArray($this->proxiesState);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }

        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }

        if (null !== $this->networkDomainName) {
            $res['NetworkDomainName'] = $this->networkDomainName;
        }

        if (null !== $this->networkDomainType) {
            $res['NetworkDomainType'] = $this->networkDomainType;
        }

        if (null !== $this->proxiesState) {
            if (\is_array($this->proxiesState)) {
                $res['ProxiesState'] = [];
                $n1 = 0;
                foreach ($this->proxiesState as $item1) {
                    $res['ProxiesState'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }

        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }

        if (isset($map['NetworkDomainName'])) {
            $model->networkDomainName = $map['NetworkDomainName'];
        }

        if (isset($map['NetworkDomainType'])) {
            $model->networkDomainType = $map['NetworkDomainType'];
        }

        if (isset($map['ProxiesState'])) {
            if (!empty($map['ProxiesState'])) {
                $model->proxiesState = [];
                $n1 = 0;
                foreach ($map['ProxiesState'] as $item1) {
                    $model->proxiesState[$n1] = proxiesState::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
