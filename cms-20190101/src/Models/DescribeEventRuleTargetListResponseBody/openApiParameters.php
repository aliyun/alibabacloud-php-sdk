<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\openApiParameters\openApiParameters;

class openApiParameters extends Model
{
    /**
     * @var openApiParameters[]
     */
    public $openApiParameters;
    protected $_name = [
        'openApiParameters' => 'OpenApiParameters',
    ];

    public function validate()
    {
        if (\is_array($this->openApiParameters)) {
            Model::validateArray($this->openApiParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openApiParameters) {
            if (\is_array($this->openApiParameters)) {
                $res['OpenApiParameters'] = [];
                $n1 = 0;
                foreach ($this->openApiParameters as $item1) {
                    $res['OpenApiParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OpenApiParameters'])) {
            if (!empty($map['OpenApiParameters'])) {
                $model->openApiParameters = [];
                $n1 = 0;
                foreach ($map['OpenApiParameters'] as $item1) {
                    $model->openApiParameters[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
