<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig\depends;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig\usageParameters;

class versionConfig extends Model
{
    /**
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @var depends[]
     */
    public $depends;

    /**
     * @var usageParameters[]
     */
    public $usageParameters;
    protected $_name = [
        'createParameters' => 'CreateParameters',
        'depends' => 'Depends',
        'usageParameters' => 'UsageParameters',
    ];

    public function validate()
    {
        if (\is_array($this->createParameters)) {
            Model::validateArray($this->createParameters);
        }
        if (\is_array($this->depends)) {
            Model::validateArray($this->depends);
        }
        if (\is_array($this->usageParameters)) {
            Model::validateArray($this->usageParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createParameters) {
            if (\is_array($this->createParameters)) {
                $res['CreateParameters'] = [];
                $n1 = 0;
                foreach ($this->createParameters as $item1) {
                    $res['CreateParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->depends) {
            if (\is_array($this->depends)) {
                $res['Depends'] = [];
                $n1 = 0;
                foreach ($this->depends as $item1) {
                    $res['Depends'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usageParameters) {
            if (\is_array($this->usageParameters)) {
                $res['UsageParameters'] = [];
                $n1 = 0;
                foreach ($this->usageParameters as $item1) {
                    $res['UsageParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateParameters'])) {
            if (!empty($map['CreateParameters'])) {
                $model->createParameters = [];
                $n1 = 0;
                foreach ($map['CreateParameters'] as $item1) {
                    $model->createParameters[$n1] = createParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Depends'])) {
            if (!empty($map['Depends'])) {
                $model->depends = [];
                $n1 = 0;
                foreach ($map['Depends'] as $item1) {
                    $model->depends[$n1] = depends::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UsageParameters'])) {
            if (!empty($map['UsageParameters'])) {
                $model->usageParameters = [];
                $n1 = 0;
                foreach ($map['UsageParameters'] as $item1) {
                    $model->usageParameters[$n1] = usageParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
