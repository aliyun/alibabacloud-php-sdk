<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;

class completeStrategy extends Model
{
    /**
     * @var int
     */
    public $abnormalQuitSessionExpired;

    /**
     * @var bool
     */
    public $abnormalQuitSessionExpiredFlag;

    /**
     * @var bool
     */
    public $clickCompleteAutoEnd;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $durationFlag;

    /**
     * @var bool
     */
    public $fullCoverageAutoEnd;
    protected $_name = [
        'abnormalQuitSessionExpired' => 'abnormalQuitSessionExpired',
        'abnormalQuitSessionExpiredFlag' => 'abnormalQuitSessionExpiredFlag',
        'clickCompleteAutoEnd' => 'clickCompleteAutoEnd',
        'duration' => 'duration',
        'durationFlag' => 'durationFlag',
        'fullCoverageAutoEnd' => 'fullCoverageAutoEnd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalQuitSessionExpired) {
            $res['abnormalQuitSessionExpired'] = $this->abnormalQuitSessionExpired;
        }

        if (null !== $this->abnormalQuitSessionExpiredFlag) {
            $res['abnormalQuitSessionExpiredFlag'] = $this->abnormalQuitSessionExpiredFlag;
        }

        if (null !== $this->clickCompleteAutoEnd) {
            $res['clickCompleteAutoEnd'] = $this->clickCompleteAutoEnd;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->durationFlag) {
            $res['durationFlag'] = $this->durationFlag;
        }

        if (null !== $this->fullCoverageAutoEnd) {
            $res['fullCoverageAutoEnd'] = $this->fullCoverageAutoEnd;
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
        if (isset($map['abnormalQuitSessionExpired'])) {
            $model->abnormalQuitSessionExpired = $map['abnormalQuitSessionExpired'];
        }

        if (isset($map['abnormalQuitSessionExpiredFlag'])) {
            $model->abnormalQuitSessionExpiredFlag = $map['abnormalQuitSessionExpiredFlag'];
        }

        if (isset($map['clickCompleteAutoEnd'])) {
            $model->clickCompleteAutoEnd = $map['clickCompleteAutoEnd'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['durationFlag'])) {
            $model->durationFlag = $map['durationFlag'];
        }

        if (isset($map['fullCoverageAutoEnd'])) {
            $model->fullCoverageAutoEnd = $map['fullCoverageAutoEnd'];
        }

        return $model;
    }
}
