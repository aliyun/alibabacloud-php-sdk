<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class UpdateDIProjectConfigRequest extends Model
{
    /**
     * @var string
     */
    public $destinationType;
    /**
     * @var string
     */
    public $projectConfig;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'destinationType' => 'DestinationType',
        'projectConfig'   => 'ProjectConfig',
        'projectId'       => 'ProjectId',
        'sourceType'      => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->projectConfig) {
            $res['ProjectConfig'] = $this->projectConfig;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['ProjectConfig'])) {
            $model->projectConfig = $map['ProjectConfig'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
