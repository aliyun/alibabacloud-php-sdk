<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ModelUsage;

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

    /**
     * @var ModelUsage
     */
    public $usage;
    protected $_name = [
        'customId' => 'customId',
        'result' => 'result',
        'score' => 'score',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
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

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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

        if (isset($map['usage'])) {
            $model->usage = ModelUsage::fromMap($map['usage']);
        }

        return $model;
    }
}
