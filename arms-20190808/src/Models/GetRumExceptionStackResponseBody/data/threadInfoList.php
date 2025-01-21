<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody\data;

use AlibabaCloud\Dara\Model;

class threadInfoList extends Model
{
    /**
     * @var string
     */
    public $threadDetail;
    /**
     * @var string
     */
    public $threadTag;
    protected $_name = [
        'threadDetail' => 'ThreadDetail',
        'threadTag'    => 'ThreadTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->threadDetail) {
            $res['ThreadDetail'] = $this->threadDetail;
        }

        if (null !== $this->threadTag) {
            $res['ThreadTag'] = $this->threadTag;
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
        if (isset($map['ThreadDetail'])) {
            $model->threadDetail = $map['ThreadDetail'];
        }

        if (isset($map['ThreadTag'])) {
            $model->threadTag = $map['ThreadTag'];
        }

        return $model;
    }
}
