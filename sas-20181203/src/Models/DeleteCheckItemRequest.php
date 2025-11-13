<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteCheckItemRequest extends Model
{
    /**
     * @var int[]
     */
    public $checkIds;
    protected $_name = [
        'checkIds' => 'CheckIds',
    ];

    public function validate()
    {
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1 = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1] = $item1;
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
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1 = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
