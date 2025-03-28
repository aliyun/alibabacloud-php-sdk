<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RemoveEntityTagsRequest extends Model
{
    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
        'tagKeys' => 'TagKeys',
    ];

    public function validate()
    {
        if (\is_array($this->tagKeys)) {
            Model::validateArray($this->tagKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        if (null !== $this->tagKeys) {
            if (\is_array($this->tagKeys)) {
                $res['TagKeys'] = [];
                $n1 = 0;
                foreach ($this->tagKeys as $item1) {
                    $res['TagKeys'][$n1++] = $item1;
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
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = [];
                $n1 = 0;
                foreach ($map['TagKeys'] as $item1) {
                    $model->tagKeys[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
