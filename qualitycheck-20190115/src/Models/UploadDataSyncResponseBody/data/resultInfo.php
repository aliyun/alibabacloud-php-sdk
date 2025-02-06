<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\handScoreIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules;

class resultInfo extends Model
{
    /**
     * @var handScoreIdList
     */
    public $handScoreIdList;
    /**
     * @var rules
     */
    public $rules;
    /**
     * @var int
     */
    public $score;
    protected $_name = [
        'handScoreIdList' => 'HandScoreIdList',
        'rules'           => 'Rules',
        'score'           => 'Score',
    ];

    public function validate()
    {
        if (null !== $this->handScoreIdList) {
            $this->handScoreIdList->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handScoreIdList) {
            $res['HandScoreIdList'] = null !== $this->handScoreIdList ? $this->handScoreIdList->toArray($noStream) : $this->handScoreIdList;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['HandScoreIdList'])) {
            $model->handScoreIdList = handScoreIdList::fromMap($map['HandScoreIdList']);
        }

        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
