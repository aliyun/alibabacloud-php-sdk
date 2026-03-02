<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorContactGroupCreateCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $contactIds;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'accountId' => 'accountId',
        'contactIds' => 'contactIds',
        'enterpriseId' => 'enterpriseId',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->contactIds)) {
            Model::validateArray($this->contactIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->contactIds) {
            if (\is_array($this->contactIds)) {
                $res['contactIds'] = [];
                $n1 = 0;
                foreach ($this->contactIds as $item1) {
                    $res['contactIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['contactIds'])) {
            if (!empty($map['contactIds'])) {
                $model->contactIds = [];
                $n1 = 0;
                foreach ($map['contactIds'] as $item1) {
                    $model->contactIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
