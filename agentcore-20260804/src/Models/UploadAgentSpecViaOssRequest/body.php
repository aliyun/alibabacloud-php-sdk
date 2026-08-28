<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UploadAgentSpecViaOssRequest;

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

    /**
     * @var bool
     */
    public $publish;
    protected $_name = [
        'ossObjectName' => 'ossObjectName',
        'overwrite' => 'overwrite',
        'publish' => 'publish',
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

        if (null !== $this->publish) {
            $res['publish'] = $this->publish;
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

        if (isset($map['publish'])) {
            $model->publish = $map['publish'];
        }

        return $model;
    }
}
