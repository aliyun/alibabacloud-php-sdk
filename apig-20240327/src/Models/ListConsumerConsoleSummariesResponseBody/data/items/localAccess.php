<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class localAccess extends Model
{
    /**
     * @var int
     */
    public $agentApis;

    /**
     * @var int
     */
    public $mcpServers;

    /**
     * @var int
     */
    public $modelApis;
    protected $_name = [
        'agentApis' => 'agentApis',
        'mcpServers' => 'mcpServers',
        'modelApis' => 'modelApis',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentApis) {
            $res['agentApis'] = $this->agentApis;
        }

        if (null !== $this->mcpServers) {
            $res['mcpServers'] = $this->mcpServers;
        }

        if (null !== $this->modelApis) {
            $res['modelApis'] = $this->modelApis;
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
        if (isset($map['agentApis'])) {
            $model->agentApis = $map['agentApis'];
        }

        if (isset($map['mcpServers'])) {
            $model->mcpServers = $map['mcpServers'];
        }

        if (isset($map['modelApis'])) {
            $model->modelApis = $map['modelApis'];
        }

        return $model;
    }
}
