<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\Tea\Model;

class openApiParameters extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\openApiParameters\openApiParameters[]
     */
    public $openApiParameters;
    protected $_name = [
        'openApiParameters' => 'OpenApiParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openApiParameters) {
            $res['OpenApiParameters'] = [];
            if (null !== $this->openApiParameters && \is_array($this->openApiParameters)) {
                $n = 0;
                foreach ($this->openApiParameters as $item) {
                    $res['OpenApiParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openApiParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenApiParameters'])) {
            if (!empty($map['OpenApiParameters'])) {
                $model->openApiParameters = [];
                $n                        = 0;
                foreach ($map['OpenApiParameters'] as $item) {
                    $model->openApiParameters[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\openApiParameters\openApiParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
