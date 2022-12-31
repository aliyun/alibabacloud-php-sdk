<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 8722
     *
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
     * @example 12356
     *
     * @var int
     */
    public $liveTranscodeDuration;

    /**
     * @example 0
     *
     * @var int
     */
    public $mpsAiDuration;

    /**
     * @example 17337
     *
     * @var int
     */
    public $mpsTranscodeDuration;

    /**
     * @example 300
     *
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
    }

    public function toMap()
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
