<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody\regionConfig\fileServerConfig;
use AlibabaCloud\Tea\Model;

class regionConfig extends Model
{
    /**
     * @var string
     */
    public $addressServerHost;

    /**
     * @var string
     */
    public $agentInstallScript;

    /**
     * @var fileServerConfig
     */
    public $fileServerConfig;

    /**
     * @var string
     */
    public $fileServerType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $no;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'addressServerHost'  => 'AddressServerHost',
        'agentInstallScript' => 'AgentInstallScript',
        'fileServerConfig'   => 'FileServerConfig',
        'fileServerType'     => 'FileServerType',
        'id'                 => 'Id',
        'imageId'            => 'ImageId',
        'name'               => 'Name',
        'no'                 => 'No',
        'tag'                => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressServerHost) {
            $res['AddressServerHost'] = $this->addressServerHost;
        }
        if (null !== $this->agentInstallScript) {
            $res['AgentInstallScript'] = $this->agentInstallScript;
        }
        if (null !== $this->fileServerConfig) {
            $res['FileServerConfig'] = null !== $this->fileServerConfig ? $this->fileServerConfig->toMap() : null;
        }
        if (null !== $this->fileServerType) {
            $res['FileServerType'] = $this->fileServerType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->no) {
            $res['No'] = $this->no;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressServerHost'])) {
            $model->addressServerHost = $map['AddressServerHost'];
        }
        if (isset($map['AgentInstallScript'])) {
            $model->agentInstallScript = $map['AgentInstallScript'];
        }
        if (isset($map['FileServerConfig'])) {
            $model->fileServerConfig = fileServerConfig::fromMap($map['FileServerConfig']);
        }
        if (isset($map['FileServerType'])) {
            $model->fileServerType = $map['FileServerType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['No'])) {
            $model->no = $map['No'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
