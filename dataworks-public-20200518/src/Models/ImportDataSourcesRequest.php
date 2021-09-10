<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ImportDataSourcesRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $dataSources;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'dataSources' => 'DataSources',
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
        if (null !== $this->dataSources) {
            $res['DataSources'] = $this->dataSources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDataSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DataSources'])) {
            $model->dataSources = $map['DataSources'];
        }

        return $model;
    }
}
