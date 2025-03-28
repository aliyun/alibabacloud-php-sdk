<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class SetEntityTagsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
        'tagsShrink' => 'Tags',
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

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
