<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class WriteIntentionCommunicationLogRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var bool
     */
    public $reject;
    protected $_name = [
        'bizId'  => 'BizId',
        'note'   => 'Note',
        'reject' => 'Reject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->reject) {
            $res['Reject'] = $this->reject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WriteIntentionCommunicationLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Reject'])) {
            $model->reject = $map['Reject'];
        }

        return $model;
    }
}
