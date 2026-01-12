<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig;

use AlibabaCloud\Dara\Model;

class consumerRequestCheckService extends Model
{
    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $modalityType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestCheckService;

    /**
     * @var string
     */
    public $requestImageCheckService;
    protected $_name = [
        'matchType' => 'matchType',
        'modalityType' => 'modalityType',
        'name' => 'name',
        'requestCheckService' => 'requestCheckService',
        'requestImageCheckService' => 'requestImageCheckService',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }

        if (null !== $this->modalityType) {
            $res['modalityType'] = $this->modalityType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestCheckService) {
            $res['requestCheckService'] = $this->requestCheckService;
        }

        if (null !== $this->requestImageCheckService) {
            $res['requestImageCheckService'] = $this->requestImageCheckService;
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
        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }

        if (isset($map['modalityType'])) {
            $model->modalityType = $map['modalityType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestCheckService'])) {
            $model->requestCheckService = $map['requestCheckService'];
        }

        if (isset($map['requestImageCheckService'])) {
            $model->requestImageCheckService = $map['requestImageCheckService'];
        }

        return $model;
    }
}
