<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RunAppInstanceCommandResponseBody;

use AlibabaCloud\Dara\Model;

class commandResultModel extends Model
{
    /**
     * @var string
     */
    public $invocationId;
    protected $_name = [
        'invocationId' => 'InvocationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
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
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }

        return $model;
    }
}
