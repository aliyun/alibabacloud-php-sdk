<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AppInstanceAggregate;

use AlibabaCloud\Dara\Model;

class conversationInfo extends Model
{
    /**
     * @var int
     */
    public $chatNum;
    protected $_name = [
        'chatNum' => 'ChatNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatNum) {
            $res['ChatNum'] = $this->chatNum;
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
        if (isset($map['ChatNum'])) {
            $model->chatNum = $map['ChatNum'];
        }

        return $model;
    }
}
