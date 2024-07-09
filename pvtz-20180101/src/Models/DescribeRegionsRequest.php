<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @description The supported language. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US: English
     *   ja: Japanese
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the Alibaba Cloud account to which the permissions on the resources are granted.
     *
     * @example 111222333
     *
     * @var int
     */
    public $authorizedUserId;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The scenario. Valid values:
     *
     *   AUTH: the built-in authoritative module
     *   FWD: the forward module
     *   RA: the traffic analysis module
     *
     * @example AUTH
     *
     * @var string
     */
    public $scene;

    /**
     * @description The IP address of the client.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The type of the virtual private cloud (VPC). Valid values:
     *
     *   STANDARD: standard VPC
     *   EDS: Elastic Desktop Service (EDS) workspace VPC
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'authorizedUserId' => 'AuthorizedUserId',
        'lang'             => 'Lang',
        'scene'            => 'Scene',
        'userClientIp'     => 'UserClientIp',
        'vpcType'          => 'VpcType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
