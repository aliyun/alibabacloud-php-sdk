<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponseBody\data\containerCodePath;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponseBody\data\containerYamlConf;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var containerCodePath
     */
    public $containerCodePath;

    /**
     * @var containerYamlConf
     */
    public $containerYamlConf;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'appId'             => 'AppId',
        'containerCodePath' => 'ContainerCodePath',
        'containerYamlConf' => 'ContainerYamlConf',
        'envType'           => 'EnvType',
        'id'                => 'Id',
        'name'              => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->containerCodePath) {
            $res['ContainerCodePath'] = null !== $this->containerCodePath ? $this->containerCodePath->toMap() : null;
        }
        if (null !== $this->containerYamlConf) {
            $res['ContainerYamlConf'] = null !== $this->containerYamlConf ? $this->containerYamlConf->toMap() : null;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContainerCodePath'])) {
            $model->containerCodePath = containerCodePath::fromMap($map['ContainerCodePath']);
        }
        if (isset($map['ContainerYamlConf'])) {
            $model->containerYamlConf = containerYamlConf::fromMap($map['ContainerYamlConf']);
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
