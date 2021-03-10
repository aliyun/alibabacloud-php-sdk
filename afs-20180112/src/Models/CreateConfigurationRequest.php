<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $configurationName;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $maxPV;

    /**
     * @var string
     */
    public $configurationMethod;
    protected $_name = [
        'sourceIp'            => 'SourceIp',
        'configurationName'   => 'ConfigurationName',
        'applyType'           => 'ApplyType',
        'scene'               => 'Scene',
        'maxPV'               => 'MaxPV',
        'configurationMethod' => 'ConfigurationMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->configurationName) {
            $res['ConfigurationName'] = $this->configurationName;
        }
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->maxPV) {
            $res['MaxPV'] = $this->maxPV;
        }
        if (null !== $this->configurationMethod) {
            $res['ConfigurationMethod'] = $this->configurationMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ConfigurationName'])) {
            $model->configurationName = $map['ConfigurationName'];
        }
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['MaxPV'])) {
            $model->maxPV = $map['MaxPV'];
        }
        if (isset($map['ConfigurationMethod'])) {
            $model->configurationMethod = $map['ConfigurationMethod'];
        }

        return $model;
    }
}
