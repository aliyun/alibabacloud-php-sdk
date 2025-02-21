<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ApplicationConfig extends Model
{
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var string
     */
    public $configFileName;
    /**
     * @var string
     */
    public $configItemKey;
    /**
     * @var string
     */
    public $configItemValue;
    /**
     * @var string
     */
    public $configScope;
    /**
     * @var string
     */
    public $nodeGroupId;
    /**
     * @var string
     */
    public $nodeGroupName;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'configFileName'  => 'ConfigFileName',
        'configItemKey'   => 'ConfigItemKey',
        'configItemValue' => 'ConfigItemValue',
        'configScope'     => 'ConfigScope',
        'nodeGroupId'     => 'NodeGroupId',
        'nodeGroupName'   => 'NodeGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }

        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }

        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
        }

        if (null !== $this->configScope) {
            $res['ConfigScope'] = $this->configScope;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }

        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }

        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }

        if (isset($map['ConfigScope'])) {
            $model->configScope = $map['ConfigScope'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        return $model;
    }
}
