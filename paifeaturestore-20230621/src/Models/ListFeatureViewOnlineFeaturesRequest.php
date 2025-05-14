<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class ListFeatureViewOnlineFeaturesRequest extends Model
{
    /**
     * @var string[]
     */
    public $joinIds;
    protected $_name = [
        'joinIds' => 'JoinIds',
    ];

    public function validate()
    {
        if (\is_array($this->joinIds)) {
            Model::validateArray($this->joinIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->joinIds) {
            if (\is_array($this->joinIds)) {
                $res['JoinIds'] = [];
                $n1 = 0;
                foreach ($this->joinIds as $item1) {
                    $res['JoinIds'][$n1++] = $item1;
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
        if (isset($map['JoinIds'])) {
            if (!empty($map['JoinIds'])) {
                $model->joinIds = [];
                $n1 = 0;
                foreach ($map['JoinIds'] as $item1) {
                    $model->joinIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
