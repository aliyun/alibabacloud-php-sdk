<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20221014\Models;

use AlibabaCloud\Dara\Model;

class CancelCoordinationRequest extends Model
{
    /**
     * @var string[]
     */
    public $coIds;
    protected $_name = [
        'coIds' => 'CoIds',
    ];

    public function validate()
    {
        if (\is_array($this->coIds)) {
            Model::validateArray($this->coIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coIds) {
            if (\is_array($this->coIds)) {
                $res['CoIds'] = [];
                $n1 = 0;
                foreach ($this->coIds as $item1) {
                    $res['CoIds'][$n1] = $item1;
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
        if (isset($map['CoIds'])) {
            if (!empty($map['CoIds'])) {
                $model->coIds = [];
                $n1 = 0;
                foreach ($map['CoIds'] as $item1) {
                    $model->coIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
