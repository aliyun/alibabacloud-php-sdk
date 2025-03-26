<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantGrammarCheckResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
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
    protected $_name = [
        'analysis' => 'analysis',
        'correction' => 'correction',
        'correctionStatus' => 'correctionStatus',
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

        return $model;
    }
}
