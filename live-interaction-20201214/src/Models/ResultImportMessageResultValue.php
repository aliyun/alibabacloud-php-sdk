<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class ResultImportMessageResultValue extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $result;

    /**
     * @example 111111$NT
     *
     * @var string
     */
    public $msgId;
    protected $_name = [
        'result' => 'result',
        'msgId'  => 'msgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->msgId) {
            $res['msgId'] = $this->msgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultImportMessageResultValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['msgId'])) {
            $model->msgId = $map['msgId'];
        }

        return $model;
    }
}
