<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class AddMTInterveneWordRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $packageId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example hello
     *
     * @var string
     */
    public $sourceText;

    /**
     * @var string
     */
    public $targetText;
    protected $_name = [
        'packageId'  => 'PackageId',
        'projectId'  => 'ProjectId',
        'sourceText' => 'SourceText',
        'targetText' => 'TargetText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
        }
        if (null !== $this->targetText) {
            $res['TargetText'] = $this->targetText;
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
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }
        if (isset($map['TargetText'])) {
            $model->targetText = $map['TargetText'];
        }

        return $model;
    }
}
