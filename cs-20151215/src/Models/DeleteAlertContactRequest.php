<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertContactRequest extends Model
{
    /**
     * @var int[]
     */
    public $contactIds;
    protected $_name = [
        'contactIds' => 'contact_ids',
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
        if (null !== $this->contactIds) {
            if (\is_array($this->contactIds)) {
                $res['contact_ids'] = [];
                $n1 = 0;
                foreach ($this->contactIds as $item1) {
                    $res['contact_ids'][$n1] = $item1;
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
        if (isset($map['contact_ids'])) {
            if (!empty($map['contact_ids'])) {
                $model->contactIds = [];
                $n1 = 0;
                foreach ($map['contact_ids'] as $item1) {
                    $model->contactIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
