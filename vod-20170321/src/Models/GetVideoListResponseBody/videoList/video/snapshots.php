<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList\video;

use AlibabaCloud\Dara\Model;

class snapshots extends Model
{
    /**
     * @var string[]
     */
    public $snapshot;
    protected $_name = [
        'snapshot' => 'Snapshot',
    ];

    public function validate()
    {
        if (\is_array($this->snapshot)) {
            Model::validateArray($this->snapshot);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshot) {
            if (\is_array($this->snapshot)) {
                $res['Snapshot'] = [];
                $n1 = 0;
                foreach ($this->snapshot as $item1) {
                    $res['Snapshot'][$n1++] = $item1;
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
        if (isset($map['Snapshot'])) {
            if (!empty($map['Snapshot'])) {
                $model->snapshot = [];
                $n1 = 0;
                foreach ($map['Snapshot'] as $item1) {
                    $model->snapshot[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
