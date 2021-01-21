<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponse;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @var string
     */
    public $shareOption;

    /**
     * @var string
     */
    public $versionOption;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'shareOption'     => 'ShareOption',
        'versionOption'   => 'VersionOption',
        'templateVersion' => 'TemplateVersion',
        'accountId'       => 'AccountId',
    ];

    public function validate()
    {
        Model::validateRequired('shareOption', $this->shareOption, true);
        Model::validateRequired('versionOption', $this->versionOption, true);
        Model::validateRequired('templateVersion', $this->templateVersion, true);
        Model::validateRequired('accountId', $this->accountId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareOption) {
            $res['ShareOption'] = $this->shareOption;
        }
        if (null !== $this->versionOption) {
            $res['VersionOption'] = $this->versionOption;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
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
        if (isset($map['ShareOption'])) {
            $model->shareOption = $map['ShareOption'];
        }
        if (isset($map['VersionOption'])) {
            $model->versionOption = $map['VersionOption'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
