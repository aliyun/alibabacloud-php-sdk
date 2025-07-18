<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest\portRanges;
use AlibabaCloud\Tea\Model;

class CreatePrivateAccessApplicationRequest extends Model
{
    /**
     * @description The addresses of the office applications. You can enter up to 1,000 addresses of office applications.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $addresses;

    /**
     * @description Specifies whether to allow access from a browser. Default value: **Disabled**. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Disabled
     *
     * @var string
     */
    public $browserAccessStatus;

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
     * @example app-sample
     *
     * @var string
     */
    public $l7ProxyDomainAutomaticPrefix;

    /**
     * @description The browser access mode parameter. The parameter specifies the custom domain name of the proxy gateway. Enter a valid domain name.
     *
     * @example app1.example.com
     *
     * @var string
     */
    public $l7ProxyDomainCustom;

    /**
     * @description The name of the office application. The value must be 1 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example private_access_application_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The port ranges of the office applications. You can enter up to 65,535 port ranges. Multiple port ranges cannot be duplicated or overlapped.
     *
     * This parameter is required.
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
     * This parameter is required.
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
     * This parameter is required.
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
        'browserAccessStatus' => 'BrowserAccessStatus',
        'description' => 'Description',
        'l7Config' => 'L7Config',
        'l7ProxyDomainAutomaticPrefix' => 'L7ProxyDomainAutomaticPrefix',
        'l7ProxyDomainCustom' => 'L7ProxyDomainCustom',
        'name' => 'Name',
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
        if (null !== $this->browserAccessStatus) {
            $res['BrowserAccessStatus'] = $this->browserAccessStatus;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return CreatePrivateAccessApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = $map['Addresses'];
            }
        }
        if (isset($map['BrowserAccessStatus'])) {
            $model->browserAccessStatus = $map['BrowserAccessStatus'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
