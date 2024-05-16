<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDIProjectConfigRequest extends Model
{
    /**
     * @description The type of the destination data source of the sync solution. This parameter cannot be left empty.
     *
     * This parameter is required.
     * @example elasticsearch
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * This parameter is required.
     * @example 1000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the source data source of the sync solution.
     *
     * If you do not set this parameter, DataWorks applies the default global configuration to all the source data sources of the preceding types.
     * @example mysql
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'destinationType' => 'DestinationType',
        'projectId'       => 'ProjectId',
        'sourceType'      => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDIProjectConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
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
