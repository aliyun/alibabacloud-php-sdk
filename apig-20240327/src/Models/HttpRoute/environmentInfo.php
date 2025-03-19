<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo\gatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo\subDomains;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->subDomains) {
            $res['subDomains'] = [];
            if (null !== $this->subDomains && \is_array($this->subDomains)) {
                $n = 0;
                foreach ($this->subDomains as $item) {
                    $res['subDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environmentInfo
     */
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
                $n = 0;
                foreach ($map['subDomains'] as $item) {
                    $model->subDomains[$n++] = null !== $item ? subDomains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
