<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteFileRequest extends Model
{
    /**
     * @var string
     */
    public $paramFile;

    /**
     * @var string
     */
    public $subSceneUuid;
    protected $_name = [
        'paramFile'    => 'ParamFile',
        'subSceneUuid' => 'SubSceneUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramFile) {
            $res['ParamFile'] = $this->paramFile;
        }
        if (null !== $this->subSceneUuid) {
            $res['SubSceneUuid'] = $this->subSceneUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamFile'])) {
            $model->paramFile = $map['ParamFile'];
        }
        if (isset($map['SubSceneUuid'])) {
            $model->subSceneUuid = $map['SubSceneUuid'];
        }

        return $model;
    }
}
