<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineBuildConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $routineBuildConfigurationId;
    protected $_name = [
        'requestId' => 'RequestId',
        'routineBuildConfigurationId' => 'RoutineBuildConfigurationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routineBuildConfigurationId) {
            $res['RoutineBuildConfigurationId'] = $this->routineBuildConfigurationId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoutineBuildConfigurationId'])) {
            $model->routineBuildConfigurationId = $map['RoutineBuildConfigurationId'];
        }

        return $model;
    }
}
