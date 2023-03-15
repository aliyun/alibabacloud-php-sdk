<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account with which the template is shared.
     *
     * @example 142437958638****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The sharing option.
     *
     * The value is set to ShareToAccounts, which indicates that the template is shared with one or more Alibaba Cloud accounts.
     * @example ShareToAccounts
     *
     * @var string
     */
    public $shareOption;

    /**
     * @description The service that is used for resource sharing.
     *
     * Valid values:
     *
     *   ROS: Resources are shared from ROS by using the ROS console or calling the ROS API.
     *   ResourceDirectory: Resources are shared with accounts in a resource directory from Resource Management by using the resource sharing feature.
     *
     * >
     *   The number of accounts with which resources are shared from ROS is independent of the number of accounts with which resources are shared from the resource directory.
     *   The shared resources from ROS cannot override or overwrite the shared resources from the resource directory.
     *   The shared resources from the resource directory can overwrite the shared resources from ROS.
     *
     * @example ROS
     *
     * @var string
     */
    public $shareSource;

    /**
     * @description The version of the shared template. This parameter is returned only if the ShareOption parameter is set to ShareToAccounts and the VersionOption parameter is set to Specified or Current.
     *
     * Valid values: v1 to v100.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The version option for the shared template. This parameter is returned only if the ShareOption parameter is set to ShareToAccounts.
     *
     * Valid values:
     *
     *   AllVersions: All template versions are shared.
     *   Latest: Only the latest template version is shared. When the version of the template is updated, ROS updates the shared version to the latest version.
     *   Current: Only the default template version when you configure template sharing is shared. When the version of the template is updated, ROS does not update the shared version.
     *   Specified: Only the specified template version is shared.
     *
     * @example AllVersions
     *
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
