<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct;

use AlibabaCloud\Dara\Model;

class contacts extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $contactMask;
    protected $_name = [
        'channel' => 'channel',
        'contactMask' => 'contactMask',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->contactMask) {
            $res['contactMask'] = $this->contactMask;
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
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['contactMask'])) {
            $model->contactMask = $map['contactMask'];
        }

        return $model;
    }
}
