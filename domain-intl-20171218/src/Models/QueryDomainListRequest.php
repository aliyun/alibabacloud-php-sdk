<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryDomainListRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $endExpirationDate;

    /**
     * @var int
     */
    public $endRegistrationDate;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $orderByType;

    /**
     * @var string
     */
    public $orderKeyType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productDomainType;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var int
     */
    public $startExpirationDate;

    /**
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'            => 'DomainName',
        'endExpirationDate'     => 'EndExpirationDate',
        'endRegistrationDate'   => 'EndRegistrationDate',
        'lang'                  => 'Lang',
        'orderByType'           => 'OrderByType',
        'orderKeyType'          => 'OrderKeyType',
        'pageNum'               => 'PageNum',
        'pageSize'              => 'PageSize',
        'productDomainType'     => 'ProductDomainType',
        'queryType'             => 'QueryType',
        'startExpirationDate'   => 'StartExpirationDate',
        'startRegistrationDate' => 'StartRegistrationDate',
        'userClientIp'          => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endExpirationDate) {
            $res['EndExpirationDate'] = $this->endExpirationDate;
        }
        if (null !== $this->endRegistrationDate) {
            $res['EndRegistrationDate'] = $this->endRegistrationDate;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->orderByType) {
            $res['OrderByType'] = $this->orderByType;
        }
        if (null !== $this->orderKeyType) {
            $res['OrderKeyType'] = $this->orderKeyType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productDomainType) {
            $res['ProductDomainType'] = $this->productDomainType;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->startExpirationDate) {
            $res['StartExpirationDate'] = $this->startExpirationDate;
        }
        if (null !== $this->startRegistrationDate) {
            $res['StartRegistrationDate'] = $this->startRegistrationDate;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndExpirationDate'])) {
            $model->endExpirationDate = $map['EndExpirationDate'];
        }
        if (isset($map['EndRegistrationDate'])) {
            $model->endRegistrationDate = $map['EndRegistrationDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OrderByType'])) {
            $model->orderByType = $map['OrderByType'];
        }
        if (isset($map['OrderKeyType'])) {
            $model->orderKeyType = $map['OrderKeyType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductDomainType'])) {
            $model->productDomainType = $map['ProductDomainType'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['StartExpirationDate'])) {
            $model->startExpirationDate = $map['StartExpirationDate'];
        }
        if (isset($map['StartRegistrationDate'])) {
            $model->startRegistrationDate = $map['StartRegistrationDate'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
