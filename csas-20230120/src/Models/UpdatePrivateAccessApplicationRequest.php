<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationRequest\portRanges;
use AlibabaCloud\Tea\Model;

class UpdatePrivateAccessApplicationRequest extends Model
{
    /**
     * @description The addresses of the office applications. You can enter up to 1,000 addresses of office applications.
     *
     * @var string[]
     */
    public $addresses;

    /**
     * @description The ID of the office application. You can obtain the value by calling the following operations:
     *
     *   [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): queries office applications.
     *   [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~): creates an office application.
     *
     * This parameter is required.
     *
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The description of the office application. The value must be 1 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), hyphens (-), and spaces.
     *
     * @var string
     */
    public $description;

    /**
     * @description The browser access mode parameter. The parameter specifies the configurations of Layer 7 applications.
     *
     * @var PAL7Config
     */
    public $l7Config;

    /**
     * @description The browser access mode parameter. The parameter specifies the prefix of the domain name that the proxy gateway uses. The prefix must be 3 to 20 characters in length, and can contain lowercase letters, digits, and hyphens (-).
     *
     * @example app1-xxx
     *
     * @var string
     */
    public $l7ProxyDomainAutomaticPrefix;

    /**
     * @description The browser access mode parameter. The parameter specifies the custom domain name of the proxy gateway.
     *
     * @example app1.example.com
     *
     * @var string
     */
    public $l7ProxyDomainCustom;

    /**
     * @description 浏览器访问模式参数：私有代理域名。
     *
     * @example app1.example.com
     *
     * @deprecated
     *
     * @var string
     */
    public $l7ProxyDomainPrivate;

    /**
     * @description The modification type of the office application. Valid values:
     *
     *   **Cover**: uses the values of the **Addresses**, **PortRanges**, and **TagIds** parameters to overwrite the original addresses, port ranges, and tag IDs. This is the default value.
     *   **Append**: adds the values of the **Addresses**, **PortRanges**, and **TagIds** parameters respectively to the original addresses, port ranges, and tag IDs.
     *
     * @example Cover
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description The port ranges of the office applications. You can enter up to 65,535 port ranges. Multiple port ranges cannot be duplicated or overlapped.
     *
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @description The protocol that is used by the office application. Valid values:
     *
     *   **All**
     *   **TCP**
     *   **UDP**
     *
     * @example All
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The status of the office application. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The IDs of the tags for the office applications. You can add up to six custom tags to an office application.
     *
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'addresses' => 'Addresses',
        'applicationId' => 'ApplicationId',
        'description' => 'Description',
        'l7Config' => 'L7Config',
        'l7ProxyDomainAutomaticPrefix' => 'L7ProxyDomainAutomaticPrefix',
        'l7ProxyDomainCustom' => 'L7ProxyDomainCustom',
        'l7ProxyDomainPrivate' => 'L7ProxyDomainPrivate',
        'modifyType' => 'ModifyType',
        'portRanges' => 'PortRanges',
        'protocol' => 'Protocol',
        'status' => 'Status',
        'tagIds' => 'TagIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->l7Config) {
            $res['L7Config'] = null !== $this->l7Config ? $this->l7Config->toMap() : null;
        }
        if (null !== $this->l7ProxyDomainAutomaticPrefix) {
            $res['L7ProxyDomainAutomaticPrefix'] = $this->l7ProxyDomainAutomaticPrefix;
        }
        if (null !== $this->l7ProxyDomainCustom) {
            $res['L7ProxyDomainCustom'] = $this->l7ProxyDomainCustom;
        }
        if (null !== $this->l7ProxyDomainPrivate) {
            $res['L7ProxyDomainPrivate'] = $this->l7ProxyDomainPrivate;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateAccessApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = $map['Addresses'];
            }
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['L7Config'])) {
            $model->l7Config = PAL7Config::fromMap($map['L7Config']);
        }
        if (isset($map['L7ProxyDomainAutomaticPrefix'])) {
            $model->l7ProxyDomainAutomaticPrefix = $map['L7ProxyDomainAutomaticPrefix'];
        }
        if (isset($map['L7ProxyDomainCustom'])) {
            $model->l7ProxyDomainCustom = $map['L7ProxyDomainCustom'];
        }
        if (isset($map['L7ProxyDomainPrivate'])) {
            $model->l7ProxyDomainPrivate = $map['L7ProxyDomainPrivate'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }

        return $model;
    }
}
