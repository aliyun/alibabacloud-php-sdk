<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebsiteScanResultRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $handleStatus;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $siteUrl;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $subServiceModule;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'domain'           => 'Domain',
        'handleStatus'     => 'HandleStatus',
        'label'            => 'Label',
        'lang'             => 'Lang',
        'pageSize'         => 'PageSize',
        'siteUrl'          => 'SiteUrl',
        'sourceIp'         => 'SourceIp',
        'subServiceModule' => 'SubServiceModule',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->handleStatus) {
            $res['HandleStatus'] = $this->handleStatus;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->siteUrl) {
            $res['SiteUrl'] = $this->siteUrl;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->subServiceModule) {
            $res['SubServiceModule'] = $this->subServiceModule;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteScanResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HandleStatus'])) {
            $model->handleStatus = $map['HandleStatus'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SiteUrl'])) {
            $model->siteUrl = $map['SiteUrl'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SubServiceModule'])) {
            $model->subServiceModule = $map['SubServiceModule'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
