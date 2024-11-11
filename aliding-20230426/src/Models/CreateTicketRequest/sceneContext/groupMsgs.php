<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\sceneContext;

use AlibabaCloud\Tea\Model;

class groupMsgs extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $anchor;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $openMsgId;
    protected $_name = [
        'anchor'    => 'Anchor',
        'openMsgId' => 'OpenMsgId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return groupMsgs
     */
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
