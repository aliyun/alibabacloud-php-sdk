<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDIProjectConfigRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $projectConfig;
    protected $_name = [
        'projectId'       => 'ProjectId',
        'destinationType' => 'DestinationType',
        'sourceType'      => 'SourceType',
        'projectConfig'   => 'ProjectConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->projectConfig) {
            $res['ProjectConfig'] = $this->projectConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDIProjectConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['ProjectConfig'])) {
            $model->projectConfig = $map['ProjectConfig'];
        }

        return $model;
    }
}
