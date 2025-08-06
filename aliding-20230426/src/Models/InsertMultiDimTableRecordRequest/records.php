<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InsertMultiDimTableRecordRequest;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var mixed[]
     */
    public $fields;
    protected $_name = [
        'fields' => 'Fields',
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
                foreach ($this->fields as $key1 => $value1) {
                    $res['Fields'][$key1] = $value1;
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
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                foreach ($map['Fields'] as $key1 => $value1) {
                    $model->fields[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
