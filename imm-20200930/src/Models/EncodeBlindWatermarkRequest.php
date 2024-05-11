<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class EncodeBlindWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 90
     *
     * @var int
     */
    public $imageQuality;

    /**
     * @description This parameter is required.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @example oss://test-bucket/test-object.jpg
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example low
     *
     * @var string
     */
    public $strengthLevel;

    /**
     * @description This parameter is required.
     *
     * @example oss://test-bucket/target-object.jpg
     *
     * @var string
     */
    public $targetURI;
    protected $_name = [
        'content'       => 'Content',
        'imageQuality'  => 'ImageQuality',
        'projectName'   => 'ProjectName',
        'sourceURI'     => 'SourceURI',
        'strengthLevel' => 'StrengthLevel',
        'targetURI'     => 'TargetURI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->imageQuality) {
            $res['ImageQuality'] = $this->imageQuality;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->strengthLevel) {
            $res['StrengthLevel'] = $this->strengthLevel;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncodeBlindWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ImageQuality'])) {
            $model->imageQuality = $map['ImageQuality'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['StrengthLevel'])) {
            $model->strengthLevel = $map['StrengthLevel'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }

        return $model;
    }
}
