<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $editingDuration;

    /**
     * @var int
     */
    public $liveTranscodeDuration;

    /**
     * @var int
     */
    public $mpsAiDuration;

    /**
     * @var int
     */
    public $mpsTranscodeDuration;

    /**
     * @var int
     */
    public $mpsTranscodeUHDDuration;
    protected $_name = [
        'editingDuration'         => 'EditingDuration',
        'liveTranscodeDuration'   => 'LiveTranscodeDuration',
        'mpsAiDuration'           => 'MpsAiDuration',
        'mpsTranscodeDuration'    => 'MpsTranscodeDuration',
        'mpsTranscodeUHDDuration' => 'MpsTranscodeUHDDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingDuration) {
            $res['EditingDuration'] = $this->editingDuration;
        }
        if (null !== $this->liveTranscodeDuration) {
            $res['LiveTranscodeDuration'] = $this->liveTranscodeDuration;
        }
        if (null !== $this->mpsAiDuration) {
            $res['MpsAiDuration'] = $this->mpsAiDuration;
        }
        if (null !== $this->mpsTranscodeDuration) {
            $res['MpsTranscodeDuration'] = $this->mpsTranscodeDuration;
        }
        if (null !== $this->mpsTranscodeUHDDuration) {
            $res['MpsTranscodeUHDDuration'] = $this->mpsTranscodeUHDDuration;
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
        if (isset($map['EditingDuration'])) {
            $model->editingDuration = $map['EditingDuration'];
        }
        if (isset($map['LiveTranscodeDuration'])) {
            $model->liveTranscodeDuration = $map['LiveTranscodeDuration'];
        }
        if (isset($map['MpsAiDuration'])) {
            $model->mpsAiDuration = $map['MpsAiDuration'];
        }
        if (isset($map['MpsTranscodeDuration'])) {
            $model->mpsTranscodeDuration = $map['MpsTranscodeDuration'];
        }
        if (isset($map['MpsTranscodeUHDDuration'])) {
            $model->mpsTranscodeUHDDuration = $map['MpsTranscodeUHDDuration'];
        }

        return $model;
    }
}
