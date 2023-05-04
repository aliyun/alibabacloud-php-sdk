<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @description The workload type of the accelerated domain name. Valid values:
     *
     *   **web**: images and small files
     *   **download**: large files
     *   **video**: on-demand video and audio streaming
     *
     * @example web
     *
     * @var string
     */
    public $cdnType;

    /**
     * @description The creation time.
     *
     * @example 2016-07-12T11:53:19+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The CNAME record assigned to the domain name.
     *
     * @example ***.alikunlun.com
     *
     * @var string
     */
    public $domainCname;

    /**
     * @description The domain name.
     *
     * @example example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **applying**: The domain name is under review.
     *   **configuring**: The domain name is being configured.
     *   **online**: The domain name is working as expected.
     *   **stopping**: The domain name is being stopped.
     *   **offline**: The domain name is disabled.
     *   **disabling**: The domain name is being removed.
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description The update time.
     *
     * @example 2017-03-31T04:49:00+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'cdnType'     => 'CdnType',
        'createTime'  => 'CreateTime',
        'domainCname' => 'DomainCname',
        'domainName'  => 'DomainName',
        'status'      => 'Status',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainCname) {
            $res['DomainCname'] = $this->domainCname;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainCname'])) {
            $model->domainCname = $map['DomainCname'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
