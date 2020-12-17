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
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'shareOption'     => 'ShareOption',
        'versionOption'   => 'VersionOption',
        'accountIds'      => 'AccountIds',
        'templateVersion' => 'TemplateVersion',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
        Model::validateRequired('shareOption', $this->shareOption, true);
        Model::validateRequired('accountIds', $this->accountIds, true);
        Model::validateRequired('templateId', $this->templateId, true);
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
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
