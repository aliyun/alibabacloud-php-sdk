<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput\schema\fields;

class schema extends Model
{
    /**
     * @var fields[]
     */
    public $fields;
    protected $_name = [
        'fields' => 'fields',
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
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1] = fields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
