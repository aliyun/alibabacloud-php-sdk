<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos;

use AlibabaCloud\Dara\Model;

class domainInfo extends Model
{
    /**
     * @var string
     */
    public $cdnType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domainCname;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'cdnType' => 'CdnType',
        'createTime' => 'CreateTime',
        'domainCname' => 'DomainCname',
        'domainName' => 'DomainName',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
