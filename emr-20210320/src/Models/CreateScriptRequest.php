<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class CreateScriptRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scriptType;

    /**
     * @var Script[]
     */
    public $scripts;

    /**
     * @var string
     */
    public $timeoutSecs;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId' => 'RegionId',
        'scriptType' => 'ScriptType',
        'scripts' => 'Scripts',
        'timeoutSecs' => 'TimeoutSecs',
    ];

    public function validate()
    {
        if (\is_array($this->scripts)) {
            Model::validateArray($this->scripts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }

        if (null !== $this->scripts) {
            if (\is_array($this->scripts)) {
                $res['Scripts'] = [];
                $n1 = 0;
                foreach ($this->scripts as $item1) {
                    $res['Scripts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeoutSecs) {
            $res['TimeoutSecs'] = $this->timeoutSecs;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }

        if (isset($map['Scripts'])) {
            if (!empty($map['Scripts'])) {
                $model->scripts = [];
                $n1 = 0;
                foreach ($map['Scripts'] as $item1) {
                    $model->scripts[$n1] = Script::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeoutSecs'])) {
            $model->timeoutSecs = $map['TimeoutSecs'];
        }

        return $model;
    }
}
