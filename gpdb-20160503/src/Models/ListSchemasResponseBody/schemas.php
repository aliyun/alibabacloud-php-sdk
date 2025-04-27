<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSchemasResponseBody;

use AlibabaCloud\Dara\Model;

class schemas extends Model
{
    /**
     * @var string[]
     */
    public $schemas;
    protected $_name = [
        'schemas' => 'Schemas',
    ];

    public function validate()
    {
        if (\is_array($this->schemas)) {
            Model::validateArray($this->schemas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemas) {
            if (\is_array($this->schemas)) {
                $res['Schemas'] = [];
                $n1 = 0;
                foreach ($this->schemas as $item1) {
                    $res['Schemas'][$n1++] = $item1;
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
        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n1 = 0;
                foreach ($map['Schemas'] as $item1) {
                    $model->schemas[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
