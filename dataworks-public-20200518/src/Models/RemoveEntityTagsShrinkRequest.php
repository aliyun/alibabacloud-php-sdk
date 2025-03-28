<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RemoveEntityTagsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $tagKeysShrink;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
        'tagKeysShrink' => 'TagKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        if (null !== $this->tagKeysShrink) {
            $res['TagKeys'] = $this->tagKeysShrink;
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
            $model->tagKeysShrink = $map['TagKeys'];
        }

        return $model;
    }
}
