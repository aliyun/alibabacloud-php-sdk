<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainResponseBody\module\domainSpecialBizContact;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainResponseBody\module\domainSpecialBizCredentials;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $auditMsg;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @example A83E1D74-E46B-505C-947A-8C6B7E41C012
     *
     * @var string
     */
    public $bizNo;

    /**
     * @example REGISTRANT_VSP_AUDIT_SUCCESS
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @example govRegister
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 2023-01-17 11:31:10
     *
     * @var int
     */
    public $createTime;

    /**
     * @example test003.cn
     *
     * @var string
     */
    public $domainName;

    /**
     * @var domainSpecialBizContact
     */
    public $domainSpecialBizContact;

    /**
     * @var domainSpecialBizCredentials[]
     */
    public $domainSpecialBizCredentials;

    /**
     * @example 2023-03-21 15:10:04.0
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-03-21 15:10:04.0
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 34083
     *
     * @var int
     */
    public $id;

    /**
     * @example 123
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1
     *
     * @var string
     */
    public $productId;

    /**
     * @example S20172315BJ37809
     *
     * @var string
     */
    public $saleId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @example 2020-11-17 18:11:15
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example 121000000****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'auditMsg'                    => 'AuditMsg',
        'bizName'                     => 'BizName',
        'bizNo'                       => 'BizNo',
        'bizStatus'                   => 'BizStatus',
        'bizType'                     => 'BizType',
        'createTime'                  => 'CreateTime',
        'domainName'                  => 'DomainName',
        'domainSpecialBizContact'     => 'DomainSpecialBizContact',
        'domainSpecialBizCredentials' => 'DomainSpecialBizCredentials',
        'gmtCreate'                   => 'GmtCreate',
        'gmtModified'                 => 'GmtModified',
        'id'                          => 'Id',
        'orderId'                     => 'OrderId',
        'productId'                   => 'ProductId',
        'saleId'                      => 'SaleId',
        'status'                      => 'Status',
        'statusDesc'                  => 'StatusDesc',
        'updateTime'                  => 'UpdateTime',
        'userId'                      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditMsg) {
            $res['AuditMsg'] = $this->auditMsg;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizNo) {
            $res['BizNo'] = $this->bizNo;
        }
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainSpecialBizContact) {
            $res['DomainSpecialBizContact'] = null !== $this->domainSpecialBizContact ? $this->domainSpecialBizContact->toMap() : null;
        }
        if (null !== $this->domainSpecialBizCredentials) {
            $res['DomainSpecialBizCredentials'] = [];
            if (null !== $this->domainSpecialBizCredentials && \is_array($this->domainSpecialBizCredentials)) {
                $n = 0;
                foreach ($this->domainSpecialBizCredentials as $item) {
                    $res['DomainSpecialBizCredentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditMsg'])) {
            $model->auditMsg = $map['AuditMsg'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizNo'])) {
            $model->bizNo = $map['BizNo'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainSpecialBizContact'])) {
            $model->domainSpecialBizContact = domainSpecialBizContact::fromMap($map['DomainSpecialBizContact']);
        }
        if (isset($map['DomainSpecialBizCredentials'])) {
            if (!empty($map['DomainSpecialBizCredentials'])) {
                $model->domainSpecialBizCredentials = [];
                $n                                  = 0;
                foreach ($map['DomainSpecialBizCredentials'] as $item) {
                    $model->domainSpecialBizCredentials[$n++] = null !== $item ? domainSpecialBizCredentials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
