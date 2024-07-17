<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ConfigValue;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ConfigValue\files\config;
use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description The operation type. Valid values: UPDATE and DELETE. Default value: UPDATE.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The path of the parent directory.
     *
     * @example /
     *
     * @var string
     */
    public $parentFullPath;

    /**
     * @description The file name.
     *
     * @example /intervene_dict/中文-通用分析器.dict
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The configuration to be modified.
     *
     * @var config
     */
    public $config;

    /**
     * @description The directory name.
     *
     * @example /test
     *
     * @var string
     */
    public $dirName;
    protected $_name = [
        'operateType'    => 'operateType',
        'parentFullPath' => 'parentFullPath',
        'fileName'       => 'fileName',
        'config'         => 'config',
        'dirName'        => 'dirName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }
        if (null !== $this->parentFullPath) {
            $res['parentFullPath'] = $this->parentFullPath;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->dirName) {
            $res['dirName'] = $this->dirName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }
        if (isset($map['parentFullPath'])) {
            $model->parentFullPath = $map['parentFullPath'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
        if (isset($map['dirName'])) {
            $model->dirName = $map['dirName'];
        }

        return $model;
    }
}
