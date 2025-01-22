<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataQualityRuleTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $checkingConfigShrink;
    /**
     * @var string
     */
    public $directoryPath;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $samplingConfigShrink;
    /**
     * @var string
     */
    public $visibleScope;
    protected $_name = [
        'checkingConfigShrink' => 'CheckingConfig',
        'directoryPath'        => 'DirectoryPath',
        'name'                 => 'Name',
        'projectId'            => 'ProjectId',
        'samplingConfigShrink' => 'SamplingConfig',
        'visibleScope'         => 'VisibleScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkingConfigShrink) {
            $res['CheckingConfig'] = $this->checkingConfigShrink;
        }

        if (null !== $this->directoryPath) {
            $res['DirectoryPath'] = $this->directoryPath;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->samplingConfigShrink) {
            $res['SamplingConfig'] = $this->samplingConfigShrink;
        }

        if (null !== $this->visibleScope) {
            $res['VisibleScope'] = $this->visibleScope;
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
        if (isset($map['CheckingConfig'])) {
            $model->checkingConfigShrink = $map['CheckingConfig'];
        }

        if (isset($map['DirectoryPath'])) {
            $model->directoryPath = $map['DirectoryPath'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SamplingConfig'])) {
            $model->samplingConfigShrink = $map['SamplingConfig'];
        }

        if (isset($map['VisibleScope'])) {
            $model->visibleScope = $map['VisibleScope'];
        }

        return $model;
    }
}
