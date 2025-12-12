<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationResponseBody\runConfiguration;

class GetRunConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var runConfiguration
     */
    public $runConfiguration;
    protected $_name = [
        'requestId' => 'requestId',
        'runConfiguration' => 'runConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->runConfiguration) {
            $this->runConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->runConfiguration) {
            $res['runConfiguration'] = null !== $this->runConfiguration ? $this->runConfiguration->toArray($noStream) : $this->runConfiguration;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['runConfiguration'])) {
            $model->runConfiguration = runConfiguration::fromMap($map['runConfiguration']);
        }

        return $model;
    }
}
