<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantGrammarCheckResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $analysis;

    /**
     * @example I am you.
     *
     * @var string
     */
    public $correction;

    /**
     * @example Has_Error
     *
     * @var string
     */
    public $correctionStatus;
    protected $_name = [
        'analysis'         => 'analysis',
        'correction'       => 'correction',
        'correctionStatus' => 'correctionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
