<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestResponseBody\resultContent\value;

use AlibabaCloud\Tea\Model;

class defaultLimitRule extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var bool
     */
    public $defaultLimit;
    protected $_name = [
        'configId'     => 'ConfigId',
        'defaultLimit' => 'DefaultLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->defaultLimit) {
            $res['DefaultLimit'] = $this->defaultLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultLimitRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['DefaultLimit'])) {
            $model->defaultLimit = $map['DefaultLimit'];
        }

        return $model;
    }
}
