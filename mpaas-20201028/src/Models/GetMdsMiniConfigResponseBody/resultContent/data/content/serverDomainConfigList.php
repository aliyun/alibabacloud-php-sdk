<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content;

use AlibabaCloud\Tea\Model;

class serverDomainConfigList extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var int
     */
    public $configStatus;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $h5Id;

    /**
     * @var string
     */
    public $h5Name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'appCode'      => 'AppCode',
        'configStatus' => 'ConfigStatus',
        'configType'   => 'ConfigType',
        'configValue'  => 'ConfigValue',
        'description'  => 'Description',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'h5Id'         => 'H5Id',
        'h5Name'       => 'H5Name',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->h5Id) {
            $res['H5Id'] = $this->h5Id;
        }
        if (null !== $this->h5Name) {
            $res['H5Name'] = $this->h5Name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverDomainConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['H5Id'])) {
            $model->h5Id = $map['H5Id'];
        }
        if (isset($map['H5Name'])) {
            $model->h5Name = $map['H5Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
