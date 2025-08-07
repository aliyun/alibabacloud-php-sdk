<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\hit;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\hitCids;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\hitKeyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncForLLMResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\phrase;

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
        'hitCids' => 'HitCids',
        'hitKeyWords' => 'HitKeyWords',
        'phrase' => 'Phrase',
    ];

    public function validate()
    {
        if (null !== $this->hitCids) {
            $this->hitCids->validate();
        }
        if (null !== $this->hitKeyWords) {
            $this->hitKeyWords->validate();
        }
        if (null !== $this->phrase) {
            $this->phrase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitCids) {
            $res['HitCids'] = null !== $this->hitCids ? $this->hitCids->toArray($noStream) : $this->hitCids;
        }

        if (null !== $this->hitKeyWords) {
            $res['HitKeyWords'] = null !== $this->hitKeyWords ? $this->hitKeyWords->toArray($noStream) : $this->hitKeyWords;
        }

        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toArray($noStream) : $this->phrase;
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
