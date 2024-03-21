<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeOfficeSitesResponseBody;

use AlibabaCloud\Tea\Model;

class officeSites extends Model
{
    /**
     * @example VPC
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @example http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $desktopVpcEndpoint;

    /**
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @example 268****
     *
     * @var string
     */
    public $providerId;

    /**
     * @example https://eds-cn-shanghai-67****
     *
     * @var string
     */
    public $ssoServiceUrl;
    protected $_name = [
        'desktopAccessType'  => 'DesktopAccessType',
        'desktopVpcEndpoint' => 'DesktopVpcEndpoint',
        'officeSiteId'       => 'OfficeSiteId',
        'officeSiteType'     => 'OfficeSiteType',
        'providerId'         => 'ProviderId',
        'ssoServiceUrl'      => 'SsoServiceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->desktopVpcEndpoint) {
            $res['DesktopVpcEndpoint'] = $this->desktopVpcEndpoint;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
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
     * @return officeSites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['DesktopVpcEndpoint'])) {
            $model->desktopVpcEndpoint = $map['DesktopVpcEndpoint'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
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
