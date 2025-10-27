<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class meizu extends Model
{
    /**
     * @var int
     */
    public $noticeMsgType;
    protected $_name = [
        'noticeMsgType' => 'NoticeMsgType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noticeMsgType) {
            $res['NoticeMsgType'] = $this->noticeMsgType;
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
        if (isset($map['NoticeMsgType'])) {
            $model->noticeMsgType = $map['NoticeMsgType'];
        }

        return $model;
    }
}
