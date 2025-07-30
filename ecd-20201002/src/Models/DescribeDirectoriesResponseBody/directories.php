<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDirectoriesResponseBody;

use AlibabaCloud\Tea\Model;

class directories extends Model
{
    /**
     * @description The connection method.
     *
     * Valid values:
     *
     *   VPC: End users connect to cloud computers over an enterprise virtual private cloud (VPC).
     *   INTERNET: End users connect to cloud computers over the Internet.
     *   ANY: End users connect to cloud computers over the Internet or an enterprise VPC.
     *
     * @example INTERNET
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The directory ID.
     *
     * @example cn-hangzhou+dir-gx2x1dhsmu52rd****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The directory type.
     *
     * @example AD_CONNECTOR
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The provider ID.
     *
     * @example 26842
     *
     * @var string
     */
    public $providerId;

    /**
     * @description The URL of the SSO service.
     *
     * @example https://eds-cn-shanghai-67726****
     *
     * @var string
     */
    public $ssoServiceUrl;
    protected $_name = [
        'desktopAccessType' => 'DesktopAccessType',
        'directoryId' => 'DirectoryId',
        'directoryType' => 'DirectoryType',
        'providerId' => 'ProviderId',
        'ssoServiceUrl' => 'SsoServiceUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }
        if (null !== $this->ssoServiceUrl) {
            $res['SsoServiceUrl'] = $this->ssoServiceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }
        if (isset($map['SsoServiceUrl'])) {
            $model->ssoServiceUrl = $map['SsoServiceUrl'];
        }

        return $model;
    }
}
