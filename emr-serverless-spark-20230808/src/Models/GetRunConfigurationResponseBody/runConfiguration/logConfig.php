<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationResponseBody\runConfiguration;

use AlibabaCloud\Dara\Model;

class logConfig extends Model
{
    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var string
     */
    public $logPath;
    protected $_name = [
        'logLevel' => 'LogLevel',
        'logPath' => 'LogPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }

        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
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
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }

        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }

        return $model;
    }
}
