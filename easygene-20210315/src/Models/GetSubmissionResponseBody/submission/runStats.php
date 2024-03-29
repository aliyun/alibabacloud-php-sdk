<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetSubmissionResponseBody\submission;

use AlibabaCloud\Tea\Model;

class runStats extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $aborted;

    /**
     * @example 5
     *
     * @var int
     */
    public $aborting;

    /**
     * @example 5
     *
     * @var int
     */
    public $failed;

    /**
     * @example 5
     *
     * @var int
     */
    public $pending;

    /**
     * @example 5
     *
     * @var int
     */
    public $running;

    /**
     * @example 5
     *
     * @var int
     */
    public $submitted;

    /**
     * @example 5
     *
     * @var int
     */
    public $succeeded;
    protected $_name = [
        'aborted'   => 'Aborted',
        'aborting'  => 'Aborting',
        'failed'    => 'Failed',
        'pending'   => 'Pending',
        'running'   => 'Running',
        'submitted' => 'Submitted',
        'succeeded' => 'Succeeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aborted) {
            $res['Aborted'] = $this->aborted;
        }
        if (null !== $this->aborting) {
            $res['Aborting'] = $this->aborting;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
        }
        if (null !== $this->running) {
            $res['Running'] = $this->running;
        }
        if (null !== $this->submitted) {
            $res['Submitted'] = $this->submitted;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aborted'])) {
            $model->aborted = $map['Aborted'];
        }
        if (isset($map['Aborting'])) {
            $model->aborting = $map['Aborting'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
        }
        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }
        if (isset($map['Submitted'])) {
            $model->submitted = $map['Submitted'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        return $model;
    }
}
