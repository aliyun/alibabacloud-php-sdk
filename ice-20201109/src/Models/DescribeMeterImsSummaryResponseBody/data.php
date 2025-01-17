<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $editingDuration;
    /**
     * @var string
     */
    public $liveEditDuration;
    /**
     * @var string
     */
    public $liveRecordDuration;
    /**
     * @var string
     */
    public $liveSnapshotCount;
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
        'liveEditDuration'        => 'LiveEditDuration',
        'liveRecordDuration'      => 'LiveRecordDuration',
        'liveSnapshotCount'       => 'LiveSnapshotCount',
        'liveTranscodeDuration'   => 'LiveTranscodeDuration',
        'mpsAiDuration'           => 'MpsAiDuration',
        'mpsTranscodeDuration'    => 'MpsTranscodeDuration',
        'mpsTranscodeUHDDuration' => 'MpsTranscodeUHDDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingDuration) {
            $res['EditingDuration'] = $this->editingDuration;
        }

        if (null !== $this->liveEditDuration) {
            $res['LiveEditDuration'] = $this->liveEditDuration;
        }

        if (null !== $this->liveRecordDuration) {
            $res['LiveRecordDuration'] = $this->liveRecordDuration;
        }

        if (null !== $this->liveSnapshotCount) {
            $res['LiveSnapshotCount'] = $this->liveSnapshotCount;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingDuration'])) {
            $model->editingDuration = $map['EditingDuration'];
        }

        if (isset($map['LiveEditDuration'])) {
            $model->liveEditDuration = $map['LiveEditDuration'];
        }

        if (isset($map['LiveRecordDuration'])) {
            $model->liveRecordDuration = $map['LiveRecordDuration'];
        }

        if (isset($map['LiveSnapshotCount'])) {
            $model->liveSnapshotCount = $map['LiveSnapshotCount'];
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
