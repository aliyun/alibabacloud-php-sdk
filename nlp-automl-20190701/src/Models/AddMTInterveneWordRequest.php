<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class AddMTInterveneWordRequest extends Model
{
    /**
     * @var string
     */
    public $sourceText;

    /**
     * @var string
     */
    public $targetText;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $packageId;
    protected $_name = [
        'sourceText' => 'SourceText',
        'targetText' => 'TargetText',
        'projectId'  => 'ProjectId',
        'packageId'  => 'PackageId',
    ];

    public function validate()
    {
        Model::validateRequired('sourceText', $this->sourceText, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
        }
        if (null !== $this->targetText) {
            $res['TargetText'] = $this->targetText;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMTInterveneWordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }
        if (isset($map['TargetText'])) {
            $model->targetText = $map['TargetText'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        return $model;
    }
}
