<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class DownloadAgentSpecViaOssRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpecVersion;
    protected $_name = [
        'agentSpecVersion' => 'agentSpecVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpecVersion) {
            $res['agentSpecVersion'] = $this->agentSpecVersion;
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
        if (isset($map['agentSpecVersion'])) {
            $model->agentSpecVersion = $map['agentSpecVersion'];
        }

        return $model;
    }
}
