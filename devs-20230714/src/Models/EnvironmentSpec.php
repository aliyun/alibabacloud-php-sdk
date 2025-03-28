<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EnvironmentSpec extends Model
{
    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var EnvironmentStagedConfigs
     */
    public $stagedConfigs;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'roleArn' => 'roleArn',
        'stagedConfigs' => 'stagedConfigs',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->stagedConfigs) {
            $this->stagedConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->stagedConfigs) {
            $res['stagedConfigs'] = null !== $this->stagedConfigs ? $this->stagedConfigs->toArray($noStream) : $this->stagedConfigs;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['stagedConfigs'])) {
            $model->stagedConfigs = EnvironmentStagedConfigs::fromMap($map['stagedConfigs']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
