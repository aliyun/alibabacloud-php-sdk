<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest\usageParameters;

class UpdateFunctionInstanceRequest extends Model
{
    /**
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $description;

    /**
     * @var usageParameters[]
     */
    public $usageParameters;
    protected $_name = [
        'createParameters' => 'createParameters',
        'cron' => 'cron',
        'description' => 'description',
        'usageParameters' => 'usageParameters',
    ];

    public function validate()
    {
        if (\is_array($this->createParameters)) {
            Model::validateArray($this->createParameters);
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
                $res['createParameters'] = [];
                $n1 = 0;
                foreach ($this->createParameters as $item1) {
                    $res['createParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->usageParameters) {
            if (\is_array($this->usageParameters)) {
                $res['usageParameters'] = [];
                $n1 = 0;
                foreach ($this->usageParameters as $item1) {
                    $res['usageParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['createParameters'])) {
            if (!empty($map['createParameters'])) {
                $model->createParameters = [];
                $n1 = 0;
                foreach ($map['createParameters'] as $item1) {
                    $model->createParameters[$n1] = createParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['usageParameters'])) {
            if (!empty($map['usageParameters'])) {
                $model->usageParameters = [];
                $n1 = 0;
                foreach ($map['usageParameters'] as $item1) {
                    $model->usageParameters[$n1] = usageParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
