<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationUuid) {
            $res['escalationUuid'] = $this->escalationUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationUuid'])) {
            $model->escalationUuid = $map['escalationUuid'];
        }

        return $model;
    }
}
