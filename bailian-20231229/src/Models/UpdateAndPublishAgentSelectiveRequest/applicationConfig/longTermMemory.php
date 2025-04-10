<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest\applicationConfig;

use AlibabaCloud\Dara\Model;

class longTermMemory extends Model
{
    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'enable' => 'enable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}
