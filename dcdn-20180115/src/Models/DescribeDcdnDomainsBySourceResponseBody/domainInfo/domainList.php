<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody\domainInfo;

use AlibabaCloud\Tea\Model;

class domainList extends Model
{
    /**
     * @example 2021-08-21T03:05:20+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description CNAME。
     *
     * @example example.org.alikunlun.com
     *
     * @var string
     */
    public $domainCname;

    /**
     * @example example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @example dynamic
     *
     * @var string
     */
    public $domainType;

    /**
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @example 2022-12-01T03:26:55+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'domainCname' => 'DomainCname',
        'domainName'  => 'DomainName',
        'domainType'  => 'DomainType',
        'status'      => 'Status',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainCname) {
            $res['DomainCname'] = $this->domainCname;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
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
     * @return domainList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainCname'])) {
            $model->domainCname = $map['DomainCname'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
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
