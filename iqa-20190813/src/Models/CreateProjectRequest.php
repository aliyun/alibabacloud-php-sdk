<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $projectType;
    protected $_name = [
        'projectName' => 'ProjectName',
        'modelId'     => 'ModelId',
        'projectType' => 'ProjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }

        return $model;
    }
}
