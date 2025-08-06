<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\sceneContext;

use AlibabaCloud\Dara\Model;

class groupMsgs extends Model
{
    /**
     * @var bool
     */
    public $anchor;

    /**
     * @var string
     */
    public $openMsgId;
    protected $_name = [
        'anchor' => 'Anchor',
        'openMsgId' => 'OpenMsgId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchor) {
            $res['Anchor'] = $this->anchor;
        }

        if (null !== $this->openMsgId) {
            $res['OpenMsgId'] = $this->openMsgId;
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
        if (isset($map['Anchor'])) {
            $model->anchor = $map['Anchor'];
        }

        if (isset($map['OpenMsgId'])) {
            $model->openMsgId = $map['OpenMsgId'];
        }

        return $model;
    }
}
