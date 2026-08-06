<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\groups;

use AlibabaCloud\Dara\Model;

class groupMeta extends Model
{
    /**
     * @var mixed
     */
    public $groupInfo;
    protected $_name = [
        'groupInfo' => 'GroupInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = $this->groupInfo;
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
        if (isset($map['GroupInfo'])) {
            $model->groupInfo = $map['GroupInfo'];
        }

        return $model;
    }
}
