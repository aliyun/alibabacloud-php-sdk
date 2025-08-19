<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class PutScalingConfigOutput extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var ResidentConfig
     */
    public $residentConfig;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'functionName' => 'functionName',
        'qualifier' => 'qualifier',
        'residentConfig' => 'residentConfig',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (null !== $this->residentConfig) {
            $this->residentConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->residentConfig) {
            $res['residentConfig'] = null !== $this->residentConfig ? $this->residentConfig->toArray($noStream) : $this->residentConfig;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['residentConfig'])) {
            $model->residentConfig = ResidentConfig::fromMap($map['residentConfig']);
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
