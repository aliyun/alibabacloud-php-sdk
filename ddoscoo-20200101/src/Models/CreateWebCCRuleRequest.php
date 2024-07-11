<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateWebCCRuleRequest extends Model
{
    /**
     * @description The action on the requests that trigger the custom frequency control rule. Valid values:
     *
     *   **close**: blocks the requests.
     *   **captcha**: triggers Completely Automated Public Turing test to tell Computers and Humans Apart (CAPTCHA) verification for the requests.
     *
     * This parameter is required.
     * @example close
     *
     * @var string
     */
    public $act;

    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $interval;

    /**
     * @description The matching mode. Valid values:
     *
     *   **prefix**: prefix match.
     *   **match**: exact match.
     *
     * >  If the **URI** of the check path contains parameters, you must set this parameter to **prefix**.
     *
     * This parameter is required.
     * @example prefix
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the rule. The name can be up to 128 characters in length and contain letters, digits, and underscores (_).
     *
     * This parameter is required.
     * @example testrule
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the Anti-DDoS Proxy instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](https://help.aliyun.com/document_detail/94485.html).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The blocking duration. Valid values: **60** to **86400**. Unit: seconds.
     *
     * This parameter is required.
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The check path.
     *
     * This parameter is required.
     * @example /abc/a.php
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'act'             => 'Act',
        'count'           => 'Count',
        'domain'          => 'Domain',
        'interval'        => 'Interval',
        'mode'            => 'Mode',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'ttl'             => 'Ttl',
        'uri'             => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWebCCRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
