<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchUploadSkillsViaOssRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var bool
     */
    public $overwrite;
    protected $_name = [
        'ossObjectName' => 'ossObjectName',
        'overwrite' => 'overwrite',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
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
        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }

        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }

        return $model;
    }
}
