<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\MosQueryRegistrationInfoResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class tagInfos extends Model
{
    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagCode' => 'TagCode',
        'tagName' => 'TagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
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
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
