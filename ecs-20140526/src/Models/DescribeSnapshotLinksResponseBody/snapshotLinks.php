<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponseBody\snapshotLinks\snapshotLink;

class snapshotLinks extends Model
{
    /**
     * @var snapshotLink[]
     */
    public $snapshotLink;
    protected $_name = [
        'snapshotLink' => 'SnapshotLink',
    ];

    public function validate()
    {
        if (\is_array($this->snapshotLink)) {
            Model::validateArray($this->snapshotLink);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotLink) {
            if (\is_array($this->snapshotLink)) {
                $res['SnapshotLink'] = [];
                $n1 = 0;
                foreach ($this->snapshotLink as $item1) {
                    $res['SnapshotLink'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnapshotLink'])) {
            if (!empty($map['SnapshotLink'])) {
                $model->snapshotLink = [];
                $n1 = 0;
                foreach ($map['SnapshotLink'] as $item1) {
                    $model->snapshotLink[$n1++] = snapshotLink::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
