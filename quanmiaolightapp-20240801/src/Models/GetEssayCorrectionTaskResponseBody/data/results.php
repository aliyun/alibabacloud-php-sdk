<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description xxx
     *
     * @example 1
     *
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $result;

    /**
     * @example 58
     *
     * @var int
     */
    public $score;
    protected $_name = [
        'customId' => 'customId',
        'result' => 'result',
        'score' => 'score',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return results
     */
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
