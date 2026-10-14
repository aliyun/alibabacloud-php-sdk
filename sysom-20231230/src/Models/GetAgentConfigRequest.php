<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetAgentConfigRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'agentId' => 'agentId',
        'configId' => 'configId',
        'configName' => 'configName',
        'current' => 'current',
        'pageSize' => 'pageSize',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->configId) {
            $res['configId'] = $this->configId;
        }

        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['configId'])) {
            $model->configId = $map['configId'];
        }

        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
