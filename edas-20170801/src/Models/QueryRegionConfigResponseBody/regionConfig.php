<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryRegionConfigResponseBody\regionConfig\fileServerConfig;
use AlibabaCloud\Tea\Model;

class regionConfig extends Model
{
    /**
     * @description The domain name of Address Server.
     *
     * @example ****.edas.aliyun.com
     *
     * @var string
     */
    public $addressServerHost;

    /**
     * @description The installation path of the script for EDAS Agent.
     *
     * @example http://edas-qd.oss-cn-****-internal.aliyuncs.com/****sh
     *
     * @var string
     */
    public $agentInstallScript;

    /**
     * @description The information about the file server.
     *
     * @var fileServerConfig
     */
    public $fileServerConfig;

    /**
     * @description The type of the file server.
     *
     * @example oss
     *
     * @var string
     */
    public $fileServerType;

    /**
     * @description The configured ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the official image.
     *
     * @example m-2zea4hx8f9zxqah2****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The configured name of the region.
     *
     * @example China (Beijing)
     *
     * @var string
     */
    public $name;

    /**
     * @description The serial number of the region. This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $no;

    /**
     * @description The tag of the region. The value is fixed to `ALIYUN_SHARE`.
     *
     * @example ALIYUN_SHARE
     *
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
