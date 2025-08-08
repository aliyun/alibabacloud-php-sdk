<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class AlterShareReceiversRequest extends Model
{
    /**
     * @var string[]
     */
    public $addedReceivers;

    /**
     * @var string[]
     */
    public $removedReceivers;
    protected $_name = [
        'addedReceivers' => 'addedReceivers',
        'removedReceivers' => 'removedReceivers',
    ];

    public function validate()
    {
        if (\is_array($this->addedReceivers)) {
            Model::validateArray($this->addedReceivers);
        }
        if (\is_array($this->removedReceivers)) {
            Model::validateArray($this->removedReceivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addedReceivers) {
            if (\is_array($this->addedReceivers)) {
                $res['addedReceivers'] = [];
                $n1 = 0;
                foreach ($this->addedReceivers as $item1) {
                    $res['addedReceivers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->removedReceivers) {
            if (\is_array($this->removedReceivers)) {
                $res['removedReceivers'] = [];
                $n1 = 0;
                foreach ($this->removedReceivers as $item1) {
                    $res['removedReceivers'][$n1] = $item1;
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
        if (isset($map['addedReceivers'])) {
            if (!empty($map['addedReceivers'])) {
                $model->addedReceivers = [];
                $n1 = 0;
                foreach ($map['addedReceivers'] as $item1) {
                    $model->addedReceivers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['removedReceivers'])) {
            if (!empty($map['removedReceivers'])) {
                $model->removedReceivers = [];
                $n1 = 0;
                foreach ($map['removedReceivers'] as $item1) {
                    $model->removedReceivers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
