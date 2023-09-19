<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies;

use AlibabaCloud\Tea\Model;

class pushingSetting extends Model
{
    /**
     * @var string[]
     */
    public $targetUuids;
    protected $_name = [
        'targetUuids' => 'TargetUuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetUuids) {
            $res['TargetUuids'] = $this->targetUuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushingSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetUuids'])) {
            if (!empty($map['TargetUuids'])) {
                $model->targetUuids = $map['TargetUuids'];
            }
        }

        return $model;
    }
}
