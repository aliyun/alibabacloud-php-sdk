<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody\module\domainSpecialBizContact;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody\module\domainSpecialBizCredentials;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody\module\domainSpecialOrderResult;

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
     * @var string
     */
    public $bizNo;

    /**
     * @var string
     */
    public $bizStatus;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $createTime;

    /**
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
     * @var domainSpecialOrderResult
     */
    public $domainSpecialOrderResult;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'auditMsg' => 'AuditMsg',
        'bizName' => 'BizName',
        'bizNo' => 'BizNo',
        'bizStatus' => 'BizStatus',
        'bizType' => 'BizType',
        'createTime' => 'CreateTime',
        'domainName' => 'DomainName',
        'domainSpecialBizContact' => 'DomainSpecialBizContact',
        'domainSpecialBizCredentials' => 'DomainSpecialBizCredentials',
        'domainSpecialOrderResult' => 'DomainSpecialOrderResult',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'orderId' => 'OrderId',
        'productId' => 'ProductId',
        'saleId' => 'SaleId',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->domainSpecialBizContact) {
            $this->domainSpecialBizContact->validate();
        }
        if (\is_array($this->domainSpecialBizCredentials)) {
            Model::validateArray($this->domainSpecialBizCredentials);
        }
        if (null !== $this->domainSpecialOrderResult) {
            $this->domainSpecialOrderResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DomainSpecialBizContact'] = null !== $this->domainSpecialBizContact ? $this->domainSpecialBizContact->toArray($noStream) : $this->domainSpecialBizContact;
        }

        if (null !== $this->domainSpecialBizCredentials) {
            if (\is_array($this->domainSpecialBizCredentials)) {
                $res['DomainSpecialBizCredentials'] = [];
                $n1 = 0;
                foreach ($this->domainSpecialBizCredentials as $item1) {
                    $res['DomainSpecialBizCredentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainSpecialOrderResult) {
            $res['DomainSpecialOrderResult'] = null !== $this->domainSpecialOrderResult ? $this->domainSpecialOrderResult->toArray($noStream) : $this->domainSpecialOrderResult;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DomainSpecialBizCredentials'] as $item1) {
                    $model->domainSpecialBizCredentials[$n1] = domainSpecialBizCredentials::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainSpecialOrderResult'])) {
            $model->domainSpecialOrderResult = domainSpecialOrderResult::fromMap($map['DomainSpecialOrderResult']);
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
