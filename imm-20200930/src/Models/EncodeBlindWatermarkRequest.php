<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class EncodeBlindWatermarkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $imageQuality;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $strengthLevel;

    /**
     * @var string
     */
    public $targetURI;
    protected $_name = [
        'content' => 'Content',
        'imageQuality' => 'ImageQuality',
        'projectName' => 'ProjectName',
        'sourceURI' => 'SourceURI',
        'strengthLevel' => 'StrengthLevel',
        'targetURI' => 'TargetURI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
