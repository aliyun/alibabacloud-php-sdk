<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class ownerNameList extends Model
{
    /**
     * @var string[]
     */
    public $ownerNames;
    protected $_name = [
        'ownerNames' => 'OwnerNames',
    ];

    public function validate()
    {
        if (\is_array($this->ownerNames)) {
            Model::validateArray($this->ownerNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerNames) {
            if (\is_array($this->ownerNames)) {
                $res['OwnerNames'] = [];
                $n1 = 0;
                foreach ($this->ownerNames as $item1) {
                    $res['OwnerNames'][$n1] = $item1;
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
        if (isset($map['OwnerNames'])) {
            if (!empty($map['OwnerNames'])) {
                $model->ownerNames = [];
                $n1 = 0;
                foreach ($map['OwnerNames'] as $item1) {
                    $model->ownerNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
