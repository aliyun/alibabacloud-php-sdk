<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddTagWithUuidRequest extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'tagName' => 'TagName',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
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
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}
