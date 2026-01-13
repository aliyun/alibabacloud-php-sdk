<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementTableResponseBody;

use AlibabaCloud\Dara\Model;

class fields extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $vectorDimension;

    /**
     * @var string
     */
    public $vectorMetricType;
    protected $_name = [
        'attributes' => 'Attributes',
        'name' => 'Name',
        'type' => 'Type',
        'vectorDimension' => 'VectorDimension',
        'vectorMetricType' => 'VectorMetricType',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                $n1 = 0;
                foreach ($this->attributes as $item1) {
                    $res['Attributes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vectorDimension) {
            $res['VectorDimension'] = $this->vectorDimension;
        }

        if (null !== $this->vectorMetricType) {
            $res['VectorMetricType'] = $this->vectorMetricType;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n1 = 0;
                foreach ($map['Attributes'] as $item1) {
                    $model->attributes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VectorDimension'])) {
            $model->vectorDimension = $map['VectorDimension'];
        }

        if (isset($map['VectorMetricType'])) {
            $model->vectorMetricType = $map['VectorMetricType'];
        }

        return $model;
    }
}
