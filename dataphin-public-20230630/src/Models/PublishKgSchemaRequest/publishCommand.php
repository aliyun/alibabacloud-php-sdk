<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishKgSchemaRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishKgSchemaRequest\publishCommand\dataAdjustmentPolicies;

class publishCommand extends Model
{
    /**
     * @var dataAdjustmentPolicies[]
     */
    public $dataAdjustmentPolicies;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'dataAdjustmentPolicies' => 'DataAdjustmentPolicies',
        'description' => 'Description',
    ];

    public function validate()
    {
        if (\is_array($this->dataAdjustmentPolicies)) {
            Model::validateArray($this->dataAdjustmentPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataAdjustmentPolicies) {
            if (\is_array($this->dataAdjustmentPolicies)) {
                $res['DataAdjustmentPolicies'] = [];
                $n1 = 0;
                foreach ($this->dataAdjustmentPolicies as $item1) {
                    $res['DataAdjustmentPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['DataAdjustmentPolicies'])) {
            if (!empty($map['DataAdjustmentPolicies'])) {
                $model->dataAdjustmentPolicies = [];
                $n1 = 0;
                foreach ($map['DataAdjustmentPolicies'] as $item1) {
                    $model->dataAdjustmentPolicies[$n1] = dataAdjustmentPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
