<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SubmitSparkAppRequest extends Model
{
    /**
     * @var string
     */
    public $agentSource;
    /**
     * @var string
     */
    public $agentVersion;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $data;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var int
     */
    public $templateFileId;
    protected $_name = [
        'agentSource'       => 'AgentSource',
        'agentVersion'      => 'AgentVersion',
        'appName'           => 'AppName',
        'appType'           => 'AppType',
        'DBClusterId'       => 'DBClusterId',
        'data'              => 'Data',
        'resourceGroupName' => 'ResourceGroupName',
        'templateFileId'    => 'TemplateFileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSource) {
            $res['AgentSource'] = $this->agentSource;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->templateFileId) {
            $res['TemplateFileId'] = $this->templateFileId;
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
        if (isset($map['AgentSource'])) {
            $model->agentSource = $map['AgentSource'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['TemplateFileId'])) {
            $model->templateFileId = $map['TemplateFileId'];
        }

        return $model;
    }
}
