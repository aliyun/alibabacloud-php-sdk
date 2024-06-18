<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Tea\Model;

class conversationalSummary extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $speakerId;

    /**
     * @example 发言人姓名
     *
     * @var string
     */
    public $speakerName;

    /**
     * @example 发言人对应的总结
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'speakerId'   => 'SpeakerId',
        'speakerName' => 'SpeakerName',
        'summary'     => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->speakerId) {
            $res['SpeakerId'] = $this->speakerId;
        }
        if (null !== $this->speakerName) {
            $res['SpeakerName'] = $this->speakerName;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversationalSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpeakerId'])) {
            $model->speakerId = $map['SpeakerId'];
        }
        if (isset($map['SpeakerName'])) {
            $model->speakerName = $map['SpeakerName'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
