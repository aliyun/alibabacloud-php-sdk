<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class ConfigurationStyleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

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
    public $configurationMethod;

    /**
     * @var string
     */
    public $refExtId;
    protected $_name = [
        'sourceIp'            => 'SourceIp',
        'applyType'           => 'ApplyType',
        'scene'               => 'Scene',
        'configurationMethod' => 'ConfigurationMethod',
        'refExtId'            => 'RefExtId',
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
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->configurationMethod) {
            $res['ConfigurationMethod'] = $this->configurationMethod;
        }
        if (null !== $this->refExtId) {
            $res['RefExtId'] = $this->refExtId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigurationStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ConfigurationMethod'])) {
            $model->configurationMethod = $map['ConfigurationMethod'];
        }
        if (isset($map['RefExtId'])) {
            $model->refExtId = $map['RefExtId'];
        }

        return $model;
    }
}
