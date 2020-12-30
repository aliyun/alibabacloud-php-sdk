<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetTemplatePermissionRequest extends Model
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
    public $templateId;

    /**
     * @var string[]
     */
    public $accountIds;
    protected $_name = [
        'shareOption'     => 'ShareOption',
        'versionOption'   => 'VersionOption',
        'templateVersion' => 'TemplateVersion',
        'templateId'      => 'TemplateId',
        'accountIds'      => 'AccountIds',
    ];

    public function validate()
    {
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetTemplatePermissionRequest
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }

        return $model;
    }
}
