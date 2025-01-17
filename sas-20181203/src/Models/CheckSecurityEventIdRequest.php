<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CheckSecurityEventIdRequest extends Model
{
    /**
     * @var string[]
     */
    public $securityEventIds;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'securityEventIds' => 'SecurityEventIds',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventIds)) {
            Model::validateArray($this->securityEventIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityEventIds) {
            if (\is_array($this->securityEventIds)) {
                $res['SecurityEventIds'] = [];
                $n1                      = 0;
                foreach ($this->securityEventIds as $item1) {
                    $res['SecurityEventIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = [];
                $n1                      = 0;
                foreach ($map['SecurityEventIds'] as $item1) {
                    $model->securityEventIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
