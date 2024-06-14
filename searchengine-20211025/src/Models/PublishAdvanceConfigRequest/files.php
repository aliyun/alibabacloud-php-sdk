<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishAdvanceConfigRequest;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\PublishAdvanceConfigRequest\files\config;
use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $dirName;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $parentFullPath;
    protected $_name = [
        'config'         => 'config',
        'dirName'        => 'dirName',
        'fileName'       => 'fileName',
        'operateType'    => 'operateType',
        'ossPath'        => 'ossPath',
        'parentFullPath' => 'parentFullPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->dirName) {
            $res['dirName'] = $this->dirName;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }
        if (null !== $this->ossPath) {
            $res['ossPath'] = $this->ossPath;
        }
        if (null !== $this->parentFullPath) {
            $res['parentFullPath'] = $this->parentFullPath;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
        if (isset($map['dirName'])) {
            $model->dirName = $map['dirName'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }
        if (isset($map['ossPath'])) {
            $model->ossPath = $map['ossPath'];
        }
        if (isset($map['parentFullPath'])) {
            $model->parentFullPath = $map['parentFullPath'];
        }

        return $model;
    }
}
