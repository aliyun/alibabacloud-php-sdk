<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->targetUuids)) {
            Model::validateArray($this->targetUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetUuids) {
            if (\is_array($this->targetUuids)) {
                $res['TargetUuids'] = [];
                $n1 = 0;
                foreach ($this->targetUuids as $item1) {
                    $res['TargetUuids'][$n1] = $item1;
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
        if (isset($map['TargetUuids'])) {
            if (!empty($map['TargetUuids'])) {
                $model->targetUuids = [];
                $n1 = 0;
                foreach ($map['TargetUuids'] as $item1) {
                    $model->targetUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
