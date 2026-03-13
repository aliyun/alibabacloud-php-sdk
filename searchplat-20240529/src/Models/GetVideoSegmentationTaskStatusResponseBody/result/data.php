<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSegmentationTaskStatusResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSegmentationTaskStatusResponseBody\result\data\snapshots;

class data extends Model
{
    /**
     * @var int
     */
    public $chunkIndex;

    /**
     * @var float
     */
    public $endTime;

    /**
     * @var snapshots[]
     */
    public $snapshots;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var string
     */
    public $transcript;
    protected $_name = [
        'chunkIndex' => 'chunk_index',
        'endTime' => 'end_time',
        'snapshots' => 'snapshots',
        'startTime' => 'start_time',
        'transcript' => 'transcript',
    ];

    public function validate()
    {
        if (\is_array($this->snapshots)) {
            Model::validateArray($this->snapshots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkIndex) {
            $res['chunk_index'] = $this->chunkIndex;
        }

        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }

        if (null !== $this->snapshots) {
            if (\is_array($this->snapshots)) {
                $res['snapshots'] = [];
                $n1 = 0;
                foreach ($this->snapshots as $item1) {
                    $res['snapshots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }

        if (null !== $this->transcript) {
            $res['transcript'] = $this->transcript;
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
        if (isset($map['chunk_index'])) {
            $model->chunkIndex = $map['chunk_index'];
        }

        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }

        if (isset($map['snapshots'])) {
            if (!empty($map['snapshots'])) {
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['snapshots'] as $item1) {
                    $model->snapshots[$n1] = snapshots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }

        if (isset($map['transcript'])) {
            $model->transcript = $map['transcript'];
        }

        return $model;
    }
}
