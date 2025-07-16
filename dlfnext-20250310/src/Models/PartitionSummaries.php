<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class PartitionSummaries extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @description Current page of partition profiles
     *
     * @var PartitionSummary[]
     */
    public $partitions;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'partitions' => 'partitions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->partitions) {
            $res['partitions'] = [];
            if (null !== $this->partitions && \is_array($this->partitions)) {
                $n = 0;
                foreach ($this->partitions as $item) {
                    $res['partitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PartitionSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = [];
                $n = 0;
                foreach ($map['partitions'] as $item) {
                    $model->partitions[$n++] = null !== $item ? PartitionSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
