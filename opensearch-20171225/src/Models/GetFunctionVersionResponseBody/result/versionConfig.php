<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig\depends;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig\usageParameters;
use AlibabaCloud\Tea\Model;

class versionConfig extends Model
{
    /**
     * @description The parameters that are used to create the instance.
     *
     * @example [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\"required\": true, \"pattern?\": \"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\"}",                     "componentProps": "{\"component\": \"Input\", \"attributes\": {\"defaultValue\": \"value1\"}}"                 }             ]
     *
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @description The dependencies of the instance.
     *
     * @var depends[]
     */
    public $depends;

    /**
     * @description The parameters that are used during online use of the instance.
     *
     * @example []
     *
     * @var usageParameters[]
     */
    public $usageParameters;
    protected $_name = [
        'createParameters' => 'CreateParameters',
        'depends'          => 'Depends',
        'usageParameters'  => 'UsageParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createParameters) {
            $res['CreateParameters'] = [];
            if (null !== $this->createParameters && \is_array($this->createParameters)) {
                $n = 0;
                foreach ($this->createParameters as $item) {
                    $res['CreateParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->depends) {
            $res['Depends'] = [];
            if (null !== $this->depends && \is_array($this->depends)) {
                $n = 0;
                foreach ($this->depends as $item) {
                    $res['Depends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usageParameters) {
            $res['UsageParameters'] = [];
            if (null !== $this->usageParameters && \is_array($this->usageParameters)) {
                $n = 0;
                foreach ($this->usageParameters as $item) {
                    $res['UsageParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateParameters'])) {
            if (!empty($map['CreateParameters'])) {
                $model->createParameters = [];
                $n                       = 0;
                foreach ($map['CreateParameters'] as $item) {
                    $model->createParameters[$n++] = null !== $item ? createParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Depends'])) {
            if (!empty($map['Depends'])) {
                $model->depends = [];
                $n              = 0;
                foreach ($map['Depends'] as $item) {
                    $model->depends[$n++] = null !== $item ? depends::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsageParameters'])) {
            if (!empty($map['UsageParameters'])) {
                $model->usageParameters = [];
                $n                      = 0;
                foreach ($map['UsageParameters'] as $item) {
                    $model->usageParameters[$n++] = null !== $item ? usageParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
