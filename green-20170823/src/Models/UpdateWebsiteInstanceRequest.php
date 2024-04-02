<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebsiteInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

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
    public $lang;

    /**
     * @var string
     */
    public $siteProtocol;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $websiteScanInterval;
    protected $_name = [
        'domain'                => 'Domain',
        'indexPage'             => 'IndexPage',
        'indexPageScanInterval' => 'IndexPageScanInterval',
        'instanceId'            => 'InstanceId',
        'lang'                  => 'Lang',
        'siteProtocol'          => 'SiteProtocol',
        'sourceIp'              => 'SourceIp',
        'websiteScanInterval'   => 'WebsiteScanInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->siteProtocol) {
            $res['SiteProtocol'] = $this->siteProtocol;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->websiteScanInterval) {
            $res['WebsiteScanInterval'] = $this->websiteScanInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebsiteInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SiteProtocol'])) {
            $model->siteProtocol = $map['SiteProtocol'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['WebsiteScanInterval'])) {
            $model->websiteScanInterval = $map['WebsiteScanInterval'];
        }

        return $model;
    }
}
