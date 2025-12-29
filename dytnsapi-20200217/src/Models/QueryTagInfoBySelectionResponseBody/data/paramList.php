<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList\valueDict;

class paramList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $hint;

    /**
     * @var bool
     */
    public $must;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var valueDict[]
     */
    public $valueDict;
    protected $_name = [
        'code' => 'Code',
        'hint' => 'Hint',
        'must' => 'Must',
        'name' => 'Name',
        'type' => 'Type',
        'valueDict' => 'ValueDict',
    ];

    public function validate()
    {
        if (\is_array($this->valueDict)) {
            Model::validateArray($this->valueDict);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->hint) {
            $res['Hint'] = $this->hint;
        }

        if (null !== $this->must) {
            $res['Must'] = $this->must;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valueDict) {
            if (\is_array($this->valueDict)) {
                $res['ValueDict'] = [];
                $n1 = 0;
                foreach ($this->valueDict as $item1) {
                    $res['ValueDict'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Hint'])) {
            $model->hint = $map['Hint'];
        }

        if (isset($map['Must'])) {
            $model->must = $map['Must'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValueDict'])) {
            if (!empty($map['ValueDict'])) {
                $model->valueDict = [];
                $n1 = 0;
                foreach ($map['ValueDict'] as $item1) {
                    $model->valueDict[$n1] = valueDict::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
