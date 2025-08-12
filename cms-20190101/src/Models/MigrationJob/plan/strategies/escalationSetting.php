<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies;

use AlibabaCloud\Dara\Model;

class escalationSetting extends Model
{
    /**
     * @var string
     */
    public $escalationUuid;
    protected $_name = [
        'escalationUuid' => 'escalationUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalationUuid) {
            $res['escalationUuid'] = $this->escalationUuid;
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
        if (isset($map['escalationUuid'])) {
            $model->escalationUuid = $map['escalationUuid'];
        }

        return $model;
    }
}
