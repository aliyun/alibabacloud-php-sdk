<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $cnameAuthStatus;

    /**
     * @example 0
     *
     * @var string
     */
    public $confirmStatus;

    /**
     * @example 2019-09-29T13:28Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 158923
     *
     * @var string
     */
    public $domainId;

    /**
     * @example vmeixme.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 6bd86901b9fe4618a046
     *
     * @var string
     */
    public $domainRecord;

    /**
     * @example 0
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @example 1
     *
     * @var string
     */
    public $icpStatus;

    /**
     * @example 0
     *
     * @var string
     */
    public $mxAuthStatus;

    /**
     * @example 0
     *
     * @var string
     */
    public $spfAuthStatus;

    /**
     * @example 1569734892
     *
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'cnameAuthStatus' => 'CnameAuthStatus',
        'confirmStatus'   => 'ConfirmStatus',
        'createTime'      => 'CreateTime',
        'domainId'        => 'DomainId',
        'domainName'      => 'DomainName',
        'domainRecord'    => 'DomainRecord',
        'domainStatus'    => 'DomainStatus',
        'icpStatus'       => 'IcpStatus',
        'mxAuthStatus'    => 'MxAuthStatus',
        'spfAuthStatus'   => 'SpfAuthStatus',
        'utcCreateTime'   => 'UtcCreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnameAuthStatus) {
            $res['CnameAuthStatus'] = $this->cnameAuthStatus;
        }
        if (null !== $this->confirmStatus) {
            $res['ConfirmStatus'] = $this->confirmStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainRecord) {
            $res['DomainRecord'] = $this->domainRecord;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->icpStatus) {
            $res['IcpStatus'] = $this->icpStatus;
        }
        if (null !== $this->mxAuthStatus) {
            $res['MxAuthStatus'] = $this->mxAuthStatus;
        }
        if (null !== $this->spfAuthStatus) {
            $res['SpfAuthStatus'] = $this->spfAuthStatus;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
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
        if (isset($map['CnameAuthStatus'])) {
            $model->cnameAuthStatus = $map['CnameAuthStatus'];
        }
        if (isset($map['ConfirmStatus'])) {
            $model->confirmStatus = $map['ConfirmStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainRecord'])) {
            $model->domainRecord = $map['DomainRecord'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['IcpStatus'])) {
            $model->icpStatus = $map['IcpStatus'];
        }
        if (isset($map['MxAuthStatus'])) {
            $model->mxAuthStatus = $map['MxAuthStatus'];
        }
        if (isset($map['SpfAuthStatus'])) {
            $model->spfAuthStatus = $map['SpfAuthStatus'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }

        return $model;
    }
}
