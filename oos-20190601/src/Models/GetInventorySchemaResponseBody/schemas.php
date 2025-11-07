<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody\schemas\attributes;

class schemas extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'attributes' => 'Attributes',
        'typeName' => 'TypeName',
        'version' => 'Version',
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
                    $res['Attributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
                    $model->attributes[$n1] = attributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
