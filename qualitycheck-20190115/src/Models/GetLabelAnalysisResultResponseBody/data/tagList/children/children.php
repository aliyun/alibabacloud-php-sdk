<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelAnalysisResultResponseBody\data\tagList\children;

use AlibabaCloud\Dara\Model;

class children extends Model
{
    /**
     * @var children\children[]
     */
    public $children;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'children' => 'Children',
        'remarks' => 'Remarks',
        'tagName' => 'TagName',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = children\children::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
