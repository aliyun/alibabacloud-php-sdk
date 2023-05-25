<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;
use AlibabaCloud\Tea\Model;

class backendModels extends Model
{
    /**
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @example 5c4995d08e8b4954b0f326e8e4f2b97d
     *
     * @var string
     */
    public $backendModelId;

    /**
     * @example testDvs 1
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-12-20T03:22:03.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-12-20T03:22:03.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 6fc978bb63574146b766863dd7bdf661
     *
     * @var string
     */
    public $stageModeId;

    /**
     * @example RELEASE
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['BackendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return backendModels
     */
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
