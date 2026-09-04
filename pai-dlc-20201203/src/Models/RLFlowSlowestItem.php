<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowSlowestItem extends Model
{
    /**
     * @var string
     */
    public $promptUid;

    /**
     * @var string
     */
    public $sampleIndex;

    /**
     * @var float
     */
    public $sec;
    protected $_name = [
        'promptUid' => 'PromptUid',
        'sampleIndex' => 'SampleIndex',
        'sec' => 'Sec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promptUid) {
            $res['PromptUid'] = $this->promptUid;
        }

        if (null !== $this->sampleIndex) {
            $res['SampleIndex'] = $this->sampleIndex;
        }

        if (null !== $this->sec) {
            $res['Sec'] = $this->sec;
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
        if (isset($map['PromptUid'])) {
            $model->promptUid = $map['PromptUid'];
        }

        if (isset($map['SampleIndex'])) {
            $model->sampleIndex = $map['SampleIndex'];
        }

        if (isset($map['Sec'])) {
            $model->sec = $map['Sec'];
        }

        return $model;
    }
}
