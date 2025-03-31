<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsResponseBody;

use AlibabaCloud\Dara\Model;

class fields extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'fields' => 'Fields',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
