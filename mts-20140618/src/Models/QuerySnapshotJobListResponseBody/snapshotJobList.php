<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob;

class snapshotJobList extends Model
{
    /**
     * @var snapshotJob[]
     */
    public $snapshotJob;
    protected $_name = [
        'snapshotJob' => 'SnapshotJob',
    ];

    public function validate()
    {
        if (\is_array($this->snapshotJob)) {
            Model::validateArray($this->snapshotJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotJob) {
            if (\is_array($this->snapshotJob)) {
                $res['SnapshotJob'] = [];
                $n1 = 0;
                foreach ($this->snapshotJob as $item1) {
                    $res['SnapshotJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SnapshotJob'])) {
            if (!empty($map['SnapshotJob'])) {
                $model->snapshotJob = [];
                $n1 = 0;
                foreach ($map['SnapshotJob'] as $item1) {
                    $model->snapshotJob[$n1] = snapshotJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
