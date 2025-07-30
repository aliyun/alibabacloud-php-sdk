<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'rules' => 'Rules',
        'score' => 'Score',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
