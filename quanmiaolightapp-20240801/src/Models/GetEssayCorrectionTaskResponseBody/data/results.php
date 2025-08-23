<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $score;
    protected $_name = [
        'customId' => 'customId',
        'result' => 'result',
        'score' => 'score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customId) {
            $res['customId'] = $this->customId;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
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
        if (isset($map['customId'])) {
            $model->customId = $map['customId'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        return $model;
    }
}
