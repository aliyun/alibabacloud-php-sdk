<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAgenticSpacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAgenticSpacesResponseBody\agenticSpaces\agenticSpace;

class agenticSpaces extends Model
{
    /**
     * @var agenticSpace[]
     */
    public $agenticSpace;
    protected $_name = [
        'agenticSpace' => 'AgenticSpace',
    ];

    public function validate()
    {
        if (\is_array($this->agenticSpace)) {
            Model::validateArray($this->agenticSpace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticSpace) {
            if (\is_array($this->agenticSpace)) {
                $res['AgenticSpace'] = [];
                $n1 = 0;
                foreach ($this->agenticSpace as $item1) {
                    $res['AgenticSpace'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AgenticSpace'])) {
            if (!empty($map['AgenticSpace'])) {
                $model->agenticSpace = [];
                $n1 = 0;
                foreach ($map['AgenticSpace'] as $item1) {
                    $model->agenticSpace[$n1] = agenticSpace::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
