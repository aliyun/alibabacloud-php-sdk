<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DatasetShareRelationship;

class sharingConfig extends Model
{
    /**
     * @var DatasetShareRelationship[]
     */
    public $sharedTo;
    protected $_name = [
        'sharedTo' => 'SharedTo',
    ];

    public function validate()
    {
        if (\is_array($this->sharedTo)) {
            Model::validateArray($this->sharedTo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sharedTo) {
            if (\is_array($this->sharedTo)) {
                $res['SharedTo'] = [];
                $n1 = 0;
                foreach ($this->sharedTo as $item1) {
                    $res['SharedTo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SharedTo'])) {
            if (!empty($map['SharedTo'])) {
                $model->sharedTo = [];
                $n1 = 0;
                foreach ($map['SharedTo'] as $item1) {
                    $model->sharedTo[$n1] = DatasetShareRelationship::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
