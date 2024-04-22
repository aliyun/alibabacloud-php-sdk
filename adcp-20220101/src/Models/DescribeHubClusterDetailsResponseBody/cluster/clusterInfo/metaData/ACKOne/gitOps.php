<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne;

use AlibabaCloud\Tea\Model;

class gitOps extends Model
{
    /**
     * @description The Internet access control list (ACL). This parameter takes effect only if PublicAccessEnabled is set to true.
     *
     * @var string[]
     */
    public $accessControlList;

    /**
     * @description Indicates whether GitOps is enabled. Valid values:
     *
     *   true: GitOps is enabled.
     *   false: GitOps is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether GitOps High Availability is enabled. Valid values:
     *
     *   true:  GitOps High Availability is enabled.
     *   false:  GitOps High Availability is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $HAEnabled;

    /**
     * @description Specifies whether to enable public domain name resolution in the Argo CD or Argo Workflow console. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $publicAccessEnabled;
    protected $_name = [
        'accessControlList'   => 'AccessControlList',
        'enabled'             => 'Enabled',
        'HAEnabled'           => 'HAEnabled',
        'publicAccessEnabled' => 'PublicAccessEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['AccessControlList'] = $this->accessControlList;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->HAEnabled) {
            $res['HAEnabled'] = $this->HAEnabled;
        }
        if (null !== $this->publicAccessEnabled) {
            $res['PublicAccessEnabled'] = $this->publicAccessEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gitOps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlList'])) {
            if (!empty($map['AccessControlList'])) {
                $model->accessControlList = $map['AccessControlList'];
            }
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['HAEnabled'])) {
            $model->HAEnabled = $map['HAEnabled'];
        }
        if (isset($map['PublicAccessEnabled'])) {
            $model->publicAccessEnabled = $map['PublicAccessEnabled'];
        }

        return $model;
    }
}
