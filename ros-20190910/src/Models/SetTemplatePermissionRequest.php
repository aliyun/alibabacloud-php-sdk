<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetTemplatePermissionRequest extends Model
{
    /**
     * @description The Alibaba Cloud accounts with or from which you want to share or unshare the template.\\
     * > - This parameter cannot be set to the ID of the Alibaba Cloud account that owns the template, or the RAM users of this Alibaba Cloud account.
     * > - When ShareOption is set to CancelSharing, you can unshare the template from all the specified Alibaba Cloud accounts by using an asterisk (\\*).
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example ShareToAccounts
     *
     * @var string
     */
    public $shareOption;

    /**
     * @description The ID of the template.
     *
     * This parameter is required.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The version of the shared template. This parameter takes effect only if you set ShareOption to ShareToAccounts and set VersionOption to Specified.
     *
     * Valid values: v1 to v100.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The version option for the shared template. This parameter takes effect only if you set ShareOption to ShareToAccounts.
     *
     * Valid values:
     *
     *   AllVersions (default): shares all versions of the template.
     *   Latest: shares only the latest version of template. When the version of the template is updated, ROS updates the shared version to the latest version.
     *   Current: shares only the current version of the template. When the version of the template is updated, ROS does not update the shared version.
     *   Specified: shares only the specified version of the template.
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
