<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListRequest\tag;

class QueryDomainListRequest extends Model
{
    /**
     * @var string
     */
    public $ccompany;

    /**
     * @var string
     */
    public $dns;

    /**
     * @var string
     */
    public $domainGroupId;

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
     * @var string
     */
    public $registrar;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $startExpirationDate;

    /**
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'ccompany' => 'Ccompany',
        'dns' => 'Dns',
        'domainGroupId' => 'DomainGroupId',
        'domainName' => 'DomainName',
        'endExpirationDate' => 'EndExpirationDate',
        'endRegistrationDate' => 'EndRegistrationDate',
        'lang' => 'Lang',
        'orderByType' => 'OrderByType',
        'orderKeyType' => 'OrderKeyType',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productDomainType' => 'ProductDomainType',
        'queryType' => 'QueryType',
        'registrar' => 'Registrar',
        'resourceGroupId' => 'ResourceGroupId',
        'startExpirationDate' => 'StartExpirationDate',
        'startRegistrationDate' => 'StartRegistrationDate',
        'tag' => 'Tag',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccompany) {
            $res['Ccompany'] = $this->ccompany;
        }

        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }

        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }

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

        if (null !== $this->registrar) {
            $res['Registrar'] = $this->registrar;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->startExpirationDate) {
            $res['StartExpirationDate'] = $this->startExpirationDate;
        }

        if (null !== $this->startRegistrationDate) {
            $res['StartRegistrationDate'] = $this->startRegistrationDate;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['Ccompany'])) {
            $model->ccompany = $map['Ccompany'];
        }

        if (isset($map['Dns'])) {
            $model->dns = $map['Dns'];
        }

        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }

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

        if (isset($map['Registrar'])) {
            $model->registrar = $map['Registrar'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StartExpirationDate'])) {
            $model->startExpirationDate = $map['StartExpirationDate'];
        }

        if (isset($map['StartRegistrationDate'])) {
            $model->startRegistrationDate = $map['StartRegistrationDate'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
