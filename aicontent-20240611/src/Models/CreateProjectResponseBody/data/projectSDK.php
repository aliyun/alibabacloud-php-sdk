<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectResponseBody\data;

use AlibabaCloud\Dara\Model;

class projectSDK extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $demoUrl;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $developLanguage;

    /**
     * @var string
     */
    public $docUrl;

    /**
     * @var string
     */
    public $sdkName;

    /**
     * @var string
     */
    public $sdkUrl;

    /**
     * @var string
     */
    public $sdkVersion;
    protected $_name = [
        'createTime' => 'CreateTime',
        'demoUrl' => 'DemoUrl',
        'deployMode' => 'DeployMode',
        'developLanguage' => 'DevelopLanguage',
        'docUrl' => 'DocUrl',
        'sdkName' => 'SdkName',
        'sdkUrl' => 'SdkUrl',
        'sdkVersion' => 'SdkVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->demoUrl) {
            $res['DemoUrl'] = $this->demoUrl;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->developLanguage) {
            $res['DevelopLanguage'] = $this->developLanguage;
        }

        if (null !== $this->docUrl) {
            $res['DocUrl'] = $this->docUrl;
        }

        if (null !== $this->sdkName) {
            $res['SdkName'] = $this->sdkName;
        }

        if (null !== $this->sdkUrl) {
            $res['SdkUrl'] = $this->sdkUrl;
        }

        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DemoUrl'])) {
            $model->demoUrl = $map['DemoUrl'];
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['DevelopLanguage'])) {
            $model->developLanguage = $map['DevelopLanguage'];
        }

        if (isset($map['DocUrl'])) {
            $model->docUrl = $map['DocUrl'];
        }

        if (isset($map['SdkName'])) {
            $model->sdkName = $map['SdkName'];
        }

        if (isset($map['SdkUrl'])) {
            $model->sdkUrl = $map['SdkUrl'];
        }

        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }

        return $model;
    }
}
