<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class SubmitIntentionNoteRequest extends Model
{
    /**
     * @example I20210927144823000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $note;
    protected $_name = [
        'intentionBizId' => 'IntentionBizId',
        'note'           => 'Note',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIntentionNoteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        return $model;
    }
}
