<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsResponseBody\applications\portRanges;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $browserAccessStatus;

    /**
     * @var string[]
     */
    public $connectorIds;

    /**
     * @example 2022-12-16 15:03:42
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $l7ProxyDomainAutomatic;

    /**
     * @var string
     */
    public $l7ProxyDomainCustom;

    /**
     * @example private_access_application_name
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @example All
     *
     * @var string
     */
    public $protocol;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'addresses'              => 'Addresses',
        'applicationId'          => 'ApplicationId',
        'browserAccessStatus'    => 'BrowserAccessStatus',
        'connectorIds'           => 'ConnectorIds',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'l7ProxyDomainAutomatic' => 'L7ProxyDomainAutomatic',
        'l7ProxyDomainCustom'    => 'L7ProxyDomainCustom',
        'name'                   => 'Name',
        'policyIds'              => 'PolicyIds',
        'portRanges'             => 'PortRanges',
        'protocol'               => 'Protocol',
        'status'                 => 'Status',
        'tagIds'                 => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->browserAccessStatus) {
            $res['BrowserAccessStatus'] = $this->browserAccessStatus;
        }
        if (null !== $this->connectorIds) {
            $res['ConnectorIds'] = $this->connectorIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->l7ProxyDomainAutomatic) {
            $res['L7ProxyDomainAutomatic'] = $this->l7ProxyDomainAutomatic;
        }
        if (null !== $this->l7ProxyDomainCustom) {
            $res['L7ProxyDomainCustom'] = $this->l7ProxyDomainCustom;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
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
     * @return applications
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
        if (isset($map['BrowserAccessStatus'])) {
            $model->browserAccessStatus = $map['BrowserAccessStatus'];
        }
        if (isset($map['ConnectorIds'])) {
            if (!empty($map['ConnectorIds'])) {
                $model->connectorIds = $map['ConnectorIds'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['L7ProxyDomainAutomatic'])) {
            $model->l7ProxyDomainAutomatic = $map['L7ProxyDomainAutomatic'];
        }
        if (isset($map['L7ProxyDomainCustom'])) {
            $model->l7ProxyDomainCustom = $map['L7ProxyDomainCustom'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
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
