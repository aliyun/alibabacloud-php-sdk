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
     * The value ShareToAccounts indicates that the template is shared with one or more Alibaba Cloud accounts.
     * @example ShareToAccounts
     *
     * @var string
     */
    public $shareOption;

    /**
     * @description The service that is used for resource sharing. Valid values:
     *
     * > -  The shared resources from the resource directory can overwrite the shared resources from ROS.
     * @example ROS
     *
     * @var string
     */
    public $shareSource;

    /**
     * @description The version of the shared template. This parameter is returned only if you set ShareOption to ShareToAccounts and set VersionOption to Specified or Current.
     *
     * Valid values: v1 to v100.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The version option for the shared template. This parameter is returned only if you set ShareOption to ShareToAccounts.
     *
     * Valid values:
     *
     *   AllVersions: All template versions are shared.
     *   Latest: Only the latest template version is shared. When the version of the template is updated, Resource Orchestration Service (ROS) updates the shared version to the latest version.
     *   Current: Only the latest template version is shared. When the version of the template is updated, ROS does not update the shared version.
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
