<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class ModifiyProjectRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'modelId'     => 'ModelId',
        'projectName' => 'ProjectName',
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
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifiyProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
