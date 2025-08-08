<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class PartitionSummaries extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var PartitionSummary[]
     */
    public $partitions;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'partitions' => 'partitions',
    ];

    public function validate()
    {
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->partitions) {
            if (\is_array($this->partitions)) {
                $res['partitions'] = [];
                $n1 = 0;
                foreach ($this->partitions as $item1) {
                    $res['partitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        if (isset($map['partitions'])) {
            if (!empty($map['partitions'])) {
                $model->partitions = [];
                $n1 = 0;
                foreach ($map['partitions'] as $item1) {
                    $model->partitions[$n1] = PartitionSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
