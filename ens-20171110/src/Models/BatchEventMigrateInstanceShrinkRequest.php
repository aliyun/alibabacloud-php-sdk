<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class BatchEventMigrateInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $eventInfosShrink;
    protected $_name = [
        'eventInfosShrink' => 'EventInfos',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventInfosShrink) {
            $res['EventInfos'] = $this->eventInfosShrink;
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
        if (isset($map['EventInfos'])) {
            $model->eventInfosShrink = $map['EventInfos'];
        }

        return $model;
    }
}
