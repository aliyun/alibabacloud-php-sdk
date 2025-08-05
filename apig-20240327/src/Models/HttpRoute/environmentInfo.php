<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo\gatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo\subDomains;

class environmentInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var gatewayInfo
     */
    public $gatewayInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var subDomains[]
     */
    public $subDomains;
    protected $_name = [
        'alias' => 'alias',
        'environmentId' => 'environmentId',
        'gatewayInfo' => 'gatewayInfo',
        'name' => 'name',
        'subDomains' => 'subDomains',
    ];

    public function validate()
    {
        if (null !== $this->gatewayInfo) {
            $this->gatewayInfo->validate();
        }
        if (\is_array($this->subDomains)) {
            Model::validateArray($this->subDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toArray($noStream) : $this->gatewayInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->subDomains) {
            if (\is_array($this->subDomains)) {
                $res['subDomains'] = [];
                $n1 = 0;
                foreach ($this->subDomains as $item1) {
                    $res['subDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = gatewayInfo::fromMap($map['gatewayInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['subDomains'])) {
            if (!empty($map['subDomains'])) {
                $model->subDomains = [];
                $n1 = 0;
                foreach ($map['subDomains'] as $item1) {
                    $model->subDomains[$n1] = subDomains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
