<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @var string
     */
    public $versionOption;

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
    public $templateVersion;
    protected $_name = [
        'versionOption'   => 'VersionOption',
        'accountId'       => 'AccountId',
        'shareOption'     => 'ShareOption',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionOption) {
            $res['VersionOption'] = $this->versionOption;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->shareOption) {
            $res['ShareOption'] = $this->shareOption;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (isset($map['VersionOption'])) {
            $model->versionOption = $map['VersionOption'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ShareOption'])) {
            $model->shareOption = $map['ShareOption'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
