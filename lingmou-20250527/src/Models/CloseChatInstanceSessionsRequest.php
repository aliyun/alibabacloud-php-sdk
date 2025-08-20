<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CloseChatInstanceSessionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $sessionIds;
    protected $_name = [
        'sessionIds' => 'sessionIds',
    ];

    public function validate()
    {
        if (\is_array($this->sessionIds)) {
            Model::validateArray($this->sessionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionIds) {
            if (\is_array($this->sessionIds)) {
                $res['sessionIds'] = [];
                $n1 = 0;
                foreach ($this->sessionIds as $item1) {
                    $res['sessionIds'][$n1] = $item1;
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
        if (isset($map['sessionIds'])) {
            if (!empty($map['sessionIds'])) {
                $model->sessionIds = [];
                $n1 = 0;
                foreach ($map['sessionIds'] as $item1) {
                    $model->sessionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
