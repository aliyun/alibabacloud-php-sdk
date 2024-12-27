<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherGrammarCheckResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 主语 "I" 对应的动词应该是 "am" 而不是 "is"。
     *
     * @var string
     */
    public $analysis;

    /**
     * @example I am good.
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

    /**
     * @var string
     */
    public $errorReason;
    protected $_name = [
        'analysis'         => 'analysis',
        'correction'       => 'correction',
        'correctionStatus' => 'correctionStatus',
        'errorReason'      => 'errorReason',
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
        if (null !== $this->errorReason) {
            $res['errorReason'] = $this->errorReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['errorReason'])) {
            $model->errorReason = $map['errorReason'];
        }

        return $model;
    }
}
