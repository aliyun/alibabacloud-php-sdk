<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\hitCids;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\hitKeyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\phrase;
use AlibabaCloud\Tea\Model;

class conditionHitInfo extends Model
{
    /**
     * @var hitCids
     */
    public $hitCids;

    /**
     * @var hitKeyWords
     */
    public $hitKeyWords;

    /**
     * @var phrase
     */
    public $phrase;
    protected $_name = [
        'hitCids'     => 'HitCids',
        'hitKeyWords' => 'HitKeyWords',
        'phrase'      => 'Phrase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitCids) {
            $res['HitCids'] = null !== $this->hitCids ? $this->hitCids->toMap() : null;
        }
        if (null !== $this->hitKeyWords) {
            $res['HitKeyWords'] = null !== $this->hitKeyWords ? $this->hitKeyWords->toMap() : null;
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionHitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitCids'])) {
            $model->hitCids = hitCids::fromMap($map['HitCids']);
        }
        if (isset($map['HitKeyWords'])) {
            $model->hitKeyWords = hitKeyWords::fromMap($map['HitKeyWords']);
        }
        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}
