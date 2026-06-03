<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\ListCertificateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $authorizationTime;

    /**
     * @var string
     */
    public $blockchainNo;

    /**
     * @var int[]
     */
    public $businessTypeList;

    /**
     * @var int
     */
    public $cancelTime;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var int
     */
    public $schemeType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'authorizationTime' => 'AuthorizationTime',
        'blockchainNo' => 'BlockchainNo',
        'businessTypeList' => 'BusinessTypeList',
        'cancelTime' => 'CancelTime',
        'companyName' => 'CompanyName',
        'endDate' => 'EndDate',
        'phoneNo' => 'PhoneNo',
        'schemeType' => 'SchemeType',
        'startDate' => 'StartDate',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->businessTypeList)) {
            Model::validateArray($this->businessTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationTime) {
            $res['AuthorizationTime'] = $this->authorizationTime;
        }

        if (null !== $this->blockchainNo) {
            $res['BlockchainNo'] = $this->blockchainNo;
        }

        if (null !== $this->businessTypeList) {
            if (\is_array($this->businessTypeList)) {
                $res['BusinessTypeList'] = [];
                $n1 = 0;
                foreach ($this->businessTypeList as $item1) {
                    $res['BusinessTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cancelTime) {
            $res['CancelTime'] = $this->cancelTime;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }

        if (null !== $this->schemeType) {
            $res['SchemeType'] = $this->schemeType;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AuthorizationTime'])) {
            $model->authorizationTime = $map['AuthorizationTime'];
        }

        if (isset($map['BlockchainNo'])) {
            $model->blockchainNo = $map['BlockchainNo'];
        }

        if (isset($map['BusinessTypeList'])) {
            if (!empty($map['BusinessTypeList'])) {
                $model->businessTypeList = [];
                $n1 = 0;
                foreach ($map['BusinessTypeList'] as $item1) {
                    $model->businessTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CancelTime'])) {
            $model->cancelTime = $map['CancelTime'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }

        if (isset($map['SchemeType'])) {
            $model->schemeType = $map['SchemeType'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
