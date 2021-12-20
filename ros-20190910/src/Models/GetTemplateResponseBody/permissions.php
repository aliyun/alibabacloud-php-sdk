<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $shareOption;

    /**
     * @var string
     */
    public $shareSource;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $versionOption;
    protected $_name = [
        'accountId'       => 'AccountId',
        'shareOption'     => 'ShareOption',
        'shareSource'     => 'ShareSource',
        'templateVersion' => 'TemplateVersion',
        'versionOption'   => 'VersionOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->shareOption) {
            $res['ShareOption'] = $this->shareOption;
        }
        if (null !== $this->shareSource) {
            $res['ShareSource'] = $this->shareSource;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->versionOption) {
            $res['VersionOption'] = $this->versionOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ShareOption'])) {
            $model->shareOption = $map['ShareOption'];
        }
        if (isset($map['ShareSource'])) {
            $model->shareSource = $map['ShareSource'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['VersionOption'])) {
            $model->versionOption = $map['VersionOption'];
        }

        return $model;
    }
}
