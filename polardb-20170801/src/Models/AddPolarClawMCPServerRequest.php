<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class AddPolarClawMCPServerRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var mixed[]
     */
    public $serverConfig;

    /**
     * @var string
     */
    public $serverName;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'serverConfig' => 'ServerConfig',
        'serverName' => 'ServerName',
    ];

    public function validate()
    {
        if (\is_array($this->serverConfig)) {
            Model::validateArray($this->serverConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->serverConfig) {
            if (\is_array($this->serverConfig)) {
                $res['ServerConfig'] = [];
                foreach ($this->serverConfig as $key1 => $value1) {
                    $res['ServerConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ServerConfig'])) {
            if (!empty($map['ServerConfig'])) {
                $model->serverConfig = [];
                foreach ($map['ServerConfig'] as $key1 => $value1) {
                    $model->serverConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        return $model;
    }
}
