<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadSkillViaOssRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $commitMsg;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'commitMsg' => 'commitMsg',
        'ossObjectName' => 'ossObjectName',
        'overwrite' => 'overwrite',
        'targetVersion' => 'targetVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitMsg) {
            $res['commitMsg'] = $this->commitMsg;
        }

        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
        }

        if (null !== $this->targetVersion) {
            $res['targetVersion'] = $this->targetVersion;
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
        if (isset($map['commitMsg'])) {
            $model->commitMsg = $map['commitMsg'];
        }

        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }

        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        return $model;
    }
}
