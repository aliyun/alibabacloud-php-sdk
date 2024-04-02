<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class websiteInstanceList extends Model
{
    /**
     * @var string
     */
    public $buyTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $indexPage;

    /**
     * @var int
     */
    public $indexPageScanInterval;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $websiteScanInterval;
    protected $_name = [
        'buyTime'               => 'BuyTime',
        'domain'                => 'Domain',
        'expiredTime'           => 'ExpiredTime',
        'indexPage'             => 'IndexPage',
        'indexPageScanInterval' => 'IndexPageScanInterval',
        'instanceId'            => 'InstanceId',
        'protocol'              => 'Protocol',
        'status'                => 'Status',
        'websiteScanInterval'   => 'WebsiteScanInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyTime) {
            $res['BuyTime'] = $this->buyTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->indexPage) {
            $res['IndexPage'] = $this->indexPage;
        }
        if (null !== $this->indexPageScanInterval) {
            $res['IndexPageScanInterval'] = $this->indexPageScanInterval;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->websiteScanInterval) {
            $res['WebsiteScanInterval'] = $this->websiteScanInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return websiteInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyTime'])) {
            $model->buyTime = $map['BuyTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IndexPage'])) {
            $model->indexPage = $map['IndexPage'];
        }
        if (isset($map['IndexPageScanInterval'])) {
            $model->indexPageScanInterval = $map['IndexPageScanInterval'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WebsiteScanInterval'])) {
            $model->websiteScanInterval = $map['WebsiteScanInterval'];
        }

        return $model;
    }
}
