<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\rule;

use AlibabaCloud\Dara\Model;

class keywordFilter extends Model
{
    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $relation;
    protected $_name = [
        'keywords' => 'Keywords',
        'relation' => 'Relation',
    ];

    public function validate()
    {
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
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
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }

        return $model;
    }
}
