<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\handScoreIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handScoreIdList) {
            $res['HandScoreIdList'] = null !== $this->handScoreIdList ? $this->handScoreIdList->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
