<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleModelsResponseBody\data;

use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DataItemsModelDataValue;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $commitId;

    /**
     * @var DataItemsModelDataValue[][]
     */
    public $modelData;

    /**
     * @var string[]
     */
    public $modelDataPath;

    /**
     * @var string[]
     */
    public $modelDigest;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string[]
     */
    public $resourceData;

    /**
     * @var string[]
     */
    public $resourceDataPath;
    protected $_name = [
        'commitId'         => 'CommitId',
        'modelData'        => 'ModelData',
        'modelDataPath'    => 'ModelDataPath',
        'modelDigest'      => 'ModelDigest',
        'moduleId'         => 'ModuleId',
        'resourceData'     => 'ResourceData',
        'resourceDataPath' => 'ResourceDataPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitId) {
            $res['CommitId'] = $this->commitId;
        }
        if (null !== $this->modelData) {
            $res['ModelData'] = $this->modelData;
        }
        if (null !== $this->modelDataPath) {
            $res['ModelDataPath'] = $this->modelDataPath;
        }
        if (null !== $this->modelDigest) {
            $res['ModelDigest'] = $this->modelDigest;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->resourceData) {
            $res['ResourceData'] = $this->resourceData;
        }
        if (null !== $this->resourceDataPath) {
            $res['ResourceDataPath'] = $this->resourceDataPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommitId'])) {
            $model->commitId = $map['CommitId'];
        }
        if (isset($map['ModelData'])) {
            $model->modelData = $map['ModelData'];
        }
        if (isset($map['ModelDataPath'])) {
            $model->modelDataPath = $map['ModelDataPath'];
        }
        if (isset($map['ModelDigest'])) {
            $model->modelDigest = $map['ModelDigest'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ResourceData'])) {
            $model->resourceData = $map['ResourceData'];
        }
        if (isset($map['ResourceDataPath'])) {
            $model->resourceDataPath = $map['ResourceDataPath'];
        }

        return $model;
    }
}
