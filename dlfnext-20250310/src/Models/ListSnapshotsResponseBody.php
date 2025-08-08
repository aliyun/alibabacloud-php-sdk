<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListSnapshotsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var Snapshot[]
     */
    public $snapshots;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'snapshots' => 'snapshots',
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
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
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

        if (isset($map['snapshots'])) {
            if (!empty($map['snapshots'])) {
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['snapshots'] as $item1) {
                    $model->snapshots[$n1] = Snapshot::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
