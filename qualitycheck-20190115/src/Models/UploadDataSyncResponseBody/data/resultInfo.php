<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\handScoreIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules;
use AlibabaCloud\Tea\Model;

class resultInfo extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var handScoreIdList
     */
    public $handScoreIdList;
    protected $_name = [
        'score'           => 'Score',
        'rules'           => 'Rules',
        'handScoreIdList' => 'HandScoreIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->handScoreIdList) {
            $res['HandScoreIdList'] = null !== $this->handScoreIdList ? $this->handScoreIdList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['HandScoreIdList'])) {
            $model->handScoreIdList = handScoreIdList::fromMap($map['HandScoreIdList']);
        }

        return $model;
    }
}
