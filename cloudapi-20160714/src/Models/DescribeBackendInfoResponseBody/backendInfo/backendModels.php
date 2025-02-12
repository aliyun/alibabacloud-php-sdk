<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

class backendModels extends Model
{
    /**
     * @var backendConfig
     */
    public $backendConfig;
    /**
     * @var string
     */
    public $backendModelId;
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
    public $stageModeId;
    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'backendConfig'  => 'BackendConfig',
        'backendModelId' => 'BackendModelId',
        'description'    => 'Description',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'stageModeId'    => 'StageModeId',
        'stageName'      => 'StageName',
    ];

    public function validate()
    {
        if (null !== $this->backendConfig) {
            $this->backendConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['BackendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toArray($noStream) : $this->backendConfig;
        }

        if (null !== $this->backendModelId) {
            $res['BackendModelId'] = $this->backendModelId;
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

        if (null !== $this->stageModeId) {
            $res['StageModeId'] = $this->stageModeId;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['BackendConfig'])) {
            $model->backendConfig = backendConfig::fromMap($map['BackendConfig']);
        }

        if (isset($map['BackendModelId'])) {
            $model->backendModelId = $map['BackendModelId'];
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

        if (isset($map['StageModeId'])) {
            $model->stageModeId = $map['StageModeId'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
