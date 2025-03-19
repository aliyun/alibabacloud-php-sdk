<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\environmentInfo\gatewayInfo;
use AlibabaCloud\Tea\Model;

class environmentInfo extends Model
{
    /**
     * @example 测试
     *
     * @var string
     */
    public $alias;

    /**
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var gatewayInfo
     */
    public $gatewayInfo;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'alias' => 'alias',
        'environmentId' => 'environmentId',
        'gatewayInfo' => 'gatewayInfo',
        'name' => 'name',
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

        return $model;
    }
}
