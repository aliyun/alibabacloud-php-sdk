<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\AddDeviceBelongIdentifiersRequest\identifiers;

class AddDeviceBelongIdentifiersRequest extends Model
{
    /**
     * @var identifiers[]
     */
    public $identifiers;
    protected $_name = [
        'identifiers' => 'Identifiers',
    ];

    public function validate()
    {
        if (\is_array($this->identifiers)) {
            Model::validateArray($this->identifiers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifiers) {
            if (\is_array($this->identifiers)) {
                $res['Identifiers'] = [];
                $n1 = 0;
                foreach ($this->identifiers as $item1) {
                    $res['Identifiers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Identifiers'])) {
            if (!empty($map['Identifiers'])) {
                $model->identifiers = [];
                $n1 = 0;
                foreach ($map['Identifiers'] as $item1) {
                    $model->identifiers[$n1] = identifiers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
