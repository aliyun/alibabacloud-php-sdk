<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @var string
     */
    public $domainRecord;

    /**
     * @var string
     */
    public $spfAuthStatus;

    /**
     * @var string
     */
    public $mxAuthStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cnameAuthStatus;

    /**
     * @var string
     */
    public $confirmStatus;

    /**
     * @var string
     */
    public $icpStatus;

    /**
     * @var int
     */
    public $utcCreateTime;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainId;
    protected $_name = [
        'domainRecord'    => 'DomainRecord',
        'spfAuthStatus'   => 'SpfAuthStatus',
        'mxAuthStatus'    => 'MxAuthStatus',
        'createTime'      => 'CreateTime',
        'cnameAuthStatus' => 'CnameAuthStatus',
        'confirmStatus'   => 'ConfirmStatus',
        'icpStatus'       => 'IcpStatus',
        'utcCreateTime'   => 'UtcCreateTime',
        'domainStatus'    => 'DomainStatus',
        'domainName'      => 'DomainName',
        'domainId'        => 'DomainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainRecord) {
            $res['DomainRecord'] = $this->domainRecord;
        }
        if (null !== $this->spfAuthStatus) {
            $res['SpfAuthStatus'] = $this->spfAuthStatus;
        }
        if (null !== $this->mxAuthStatus) {
            $res['MxAuthStatus'] = $this->mxAuthStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cnameAuthStatus) {
            $res['CnameAuthStatus'] = $this->cnameAuthStatus;
        }
        if (null !== $this->confirmStatus) {
            $res['ConfirmStatus'] = $this->confirmStatus;
        }
        if (null !== $this->icpStatus) {
            $res['IcpStatus'] = $this->icpStatus;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainRecord'])) {
            $model->domainRecord = $map['DomainRecord'];
        }
        if (isset($map['SpfAuthStatus'])) {
            $model->spfAuthStatus = $map['SpfAuthStatus'];
        }
        if (isset($map['MxAuthStatus'])) {
            $model->mxAuthStatus = $map['MxAuthStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CnameAuthStatus'])) {
            $model->cnameAuthStatus = $map['CnameAuthStatus'];
        }
        if (isset($map['ConfirmStatus'])) {
            $model->confirmStatus = $map['ConfirmStatus'];
        }
        if (isset($map['IcpStatus'])) {
            $model->icpStatus = $map['IcpStatus'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        return $model;
    }
}
