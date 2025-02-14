<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class sequenceCall extends Model
{
    /**
     * @var string
     */
    public $sequenceCallNoPlayCode;
    /**
     * @var string
     */
    public $sequenceCalledNo;
    /**
     * @var string
     */
    public $sequenceCalledPlayCode;
    protected $_name = [
        'sequenceCallNoPlayCode' => 'SequenceCallNoPlayCode',
        'sequenceCalledNo'       => 'SequenceCalledNo',
        'sequenceCalledPlayCode' => 'SequenceCalledPlayCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sequenceCallNoPlayCode) {
            $res['SequenceCallNoPlayCode'] = $this->sequenceCallNoPlayCode;
        }

        if (null !== $this->sequenceCalledNo) {
            $res['SequenceCalledNo'] = $this->sequenceCalledNo;
        }

        if (null !== $this->sequenceCalledPlayCode) {
            $res['SequenceCalledPlayCode'] = $this->sequenceCalledPlayCode;
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
        if (isset($map['SequenceCallNoPlayCode'])) {
            $model->sequenceCallNoPlayCode = $map['SequenceCallNoPlayCode'];
        }

        if (isset($map['SequenceCalledNo'])) {
            $model->sequenceCalledNo = $map['SequenceCalledNo'];
        }

        if (isset($map['SequenceCalledPlayCode'])) {
            $model->sequenceCalledPlayCode = $map['SequenceCalledPlayCode'];
        }

        return $model;
    }
}
