<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig;

use AlibabaCloud\Dara\Model;

class consumerResponseCheckService extends Model
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
    public $responseCheckService;

    /**
     * @var string
     */
    public $responseImageCheckService;
    protected $_name = [
        'matchType' => 'matchType',
        'modalityType' => 'modalityType',
        'name' => 'name',
        'responseCheckService' => 'responseCheckService',
        'responseImageCheckService' => 'responseImageCheckService',
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

        if (null !== $this->responseCheckService) {
            $res['responseCheckService'] = $this->responseCheckService;
        }

        if (null !== $this->responseImageCheckService) {
            $res['responseImageCheckService'] = $this->responseImageCheckService;
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

        if (isset($map['responseCheckService'])) {
            $model->responseCheckService = $map['responseCheckService'];
        }

        if (isset($map['responseImageCheckService'])) {
            $model->responseImageCheckService = $map['responseImageCheckService'];
        }

        return $model;
    }
}
