<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetTemplatePermissionRequest extends Model
{
    /**
     * @example 123456789
     *
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The sharing option.
     *
     * Valid values:
     *
     *   ShareToAccounts: shares the template with other Alibaba Cloud accounts.
     *   CancelSharing: unshares the template.
     *
     * @example ShareToAccounts
     *
     * @var string
     */
    public $shareOption;

    /**
     * @description The ID of the template.
     *
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The version of the template that you want to share. This parameter takes effect when the ShareOption parameter is set to ShareToAccounts and the VersionOption parameter is set to Specified.
     *
     * Valid values: v1 to v100.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The version option for template sharing. This parameter takes effect when the ShareOption parameter is set to ShareToAccounts.
     *
     * Default value: AllVersions. Valid values:
     *
     *   AllVersions: shares all versions of the template.
     *   Latest: shares only the latest version of the template. If the shared template is updated, the latest version of the template is shared with the destination account.
     *   Current: shares only the current version of the template. The current version of the template is shared with the destination account even if the template is updated.
     *   Specified: shares only one specific version of the template.
     *
     * @example Specified
     *
     * @var string
     */
    public $versionOption;
    protected $_name = [
        'accountIds'      => 'AccountIds',
        'shareOption'     => 'ShareOption',
        'templateId'      => 'TemplateId',
        'templateVersion' => 'TemplateVersion',
        'versionOption'   => 'VersionOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->shareOption) {
            $res['ShareOption'] = $this->shareOption;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return SetTemplatePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['ShareOption'])) {
            $model->shareOption = $map['ShareOption'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
