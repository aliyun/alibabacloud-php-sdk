<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules;

class resultInfo extends Model
{
    /**
     * @var rules
     */
    public $rules;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $tyxmPlusCount;

    /**
     * @var string
     */
    public $tyxmTurboCount;
    protected $_name = [
        'rules' => 'Rules',
        'score' => 'Score',
        'tyxmPlusCount' => 'TyxmPlusCount',
        'tyxmTurboCount' => 'TyxmTurboCount',
    ];

    public function validate()
    {
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->tyxmPlusCount) {
            $res['TyxmPlusCount'] = $this->tyxmPlusCount;
        }

        if (null !== $this->tyxmTurboCount) {
            $res['TyxmTurboCount'] = $this->tyxmTurboCount;
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
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['TyxmPlusCount'])) {
            $model->tyxmPlusCount = $map['TyxmPlusCount'];
        }

        if (isset($map['TyxmTurboCount'])) {
            $model->tyxmTurboCount = $map['TyxmTurboCount'];
        }

        return $model;
    }
}
