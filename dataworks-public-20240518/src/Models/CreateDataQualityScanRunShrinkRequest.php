<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataQualityScanRunShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dataQualityScanId;

    /**
     * @var string
     */
    public $parametersShrink;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $runtimeResourceShrink;
    protected $_name = [
        'dataQualityScanId' => 'DataQualityScanId',
        'parametersShrink' => 'Parameters',
        'projectId' => 'ProjectId',
        'runtimeResourceShrink' => 'RuntimeResource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityScanId) {
            $res['DataQualityScanId'] = $this->dataQualityScanId;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeResourceShrink) {
            $res['RuntimeResource'] = $this->runtimeResourceShrink;
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
        if (isset($map['DataQualityScanId'])) {
            $model->dataQualityScanId = $map['DataQualityScanId'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResourceShrink = $map['RuntimeResource'];
        }

        return $model;
    }
}
