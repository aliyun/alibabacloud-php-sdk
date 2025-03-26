<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherGrammarCheckResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $analysis;

    /**
     * @var string
     */
    public $correction;

    /**
     * @var string
     */
    public $correctionStatus;

    /**
     * @var string
     */
    public $errorReason;
    protected $_name = [
        'analysis' => 'analysis',
        'correction' => 'correction',
        'correctionStatus' => 'correctionStatus',
        'errorReason' => 'errorReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['analysis'] = $this->analysis;
        }

        if (null !== $this->correction) {
            $res['correction'] = $this->correction;
        }

        if (null !== $this->correctionStatus) {
            $res['correctionStatus'] = $this->correctionStatus;
        }

        if (null !== $this->errorReason) {
            $res['errorReason'] = $this->errorReason;
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
        if (isset($map['analysis'])) {
            $model->analysis = $map['analysis'];
        }

        if (isset($map['correction'])) {
            $model->correction = $map['correction'];
        }

        if (isset($map['correctionStatus'])) {
            $model->correctionStatus = $map['correctionStatus'];
        }

        if (isset($map['errorReason'])) {
            $model->errorReason = $map['errorReason'];
        }

        return $model;
    }
}
