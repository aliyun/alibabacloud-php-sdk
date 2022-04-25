<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @var string
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $orthomapConfig;

    /**
     * @var string
     */
    public $rootPath;
    protected $_name = [
        'modelConfig'    => 'ModelConfig',
        'orthomapConfig' => 'OrthomapConfig',
        'rootPath'       => 'RootPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = $this->modelConfig;
        }
        if (null !== $this->orthomapConfig) {
            $res['OrthomapConfig'] = $this->orthomapConfig;
        }
        if (null !== $this->rootPath) {
            $res['RootPath'] = $this->rootPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDirectory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelConfig'])) {
            $model->modelConfig = $map['ModelConfig'];
        }
        if (isset($map['OrthomapConfig'])) {
            $model->orthomapConfig = $map['OrthomapConfig'];
        }
        if (isset($map['RootPath'])) {
            $model->rootPath = $map['RootPath'];
        }

        return $model;
    }
}
