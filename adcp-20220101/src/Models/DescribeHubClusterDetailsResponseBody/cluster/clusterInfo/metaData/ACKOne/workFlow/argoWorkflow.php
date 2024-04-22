<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne\workFlow;

use AlibabaCloud\Tea\Model;

class argoWorkflow extends Model
{
    /**
     * @description The Internet access control list (ACL). This parameter takes effect only if PublicAccessEnabled is set to true.
     *
     * @var string[]
     */
    public $accessControlList;

    /**
     * @description Specifies whether to enable the argo workflow. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

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

    /**
     * @description Specifies whether to enable the argo workflow. UI Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example true
     *
     * @var string
     */
    public $serverEnabled;
    protected $_name = [
        'accessControlList'   => 'AccessControlList',
        'enabled'             => 'Enabled',
        'publicAccessEnabled' => 'PublicAccessEnabled',
        'serverEnabled'       => 'ServerEnabled',
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
        if (null !== $this->publicAccessEnabled) {
            $res['PublicAccessEnabled'] = $this->publicAccessEnabled;
        }
        if (null !== $this->serverEnabled) {
            $res['ServerEnabled'] = $this->serverEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return argoWorkflow
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
        if (isset($map['PublicAccessEnabled'])) {
            $model->publicAccessEnabled = $map['PublicAccessEnabled'];
        }
        if (isset($map['ServerEnabled'])) {
            $model->serverEnabled = $map['ServerEnabled'];
        }

        return $model;
    }
}
