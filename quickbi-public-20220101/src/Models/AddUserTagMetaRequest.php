<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class AddUserTagMetaRequest extends Model
{
    /**
     * @var string
     */
    public $tagDescription;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDescription' => 'TagDescription',
        'tagName' => 'TagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagDescription) {
            $res['TagDescription'] = $this->tagDescription;
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
        if (isset($map['TagDescription'])) {
            $model->tagDescription = $map['TagDescription'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
