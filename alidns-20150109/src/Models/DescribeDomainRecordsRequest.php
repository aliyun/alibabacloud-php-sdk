<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordsRequest extends Model
{
    /**
     * @description The order in which the returned DNS records are sorted. Valid values: DESC and ASC. Default value: DESC.
     *
     * @example DESC
     *
     * @var string
     */
    public $direction;

    /**
     * @description The domain name for which you want to query DNS records.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the domain name group.
     *
     * @example 2223
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The keyword based on which the system queries DNS records.
     *
     * @example test
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The language of the domain name.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The line based on which the system queries DNS records. Default value: **default**.
     *
     * [DNS lines](https://www.alibabacloud.com/help/zh/doc-detail/29807.htm)
     * @example cn_mobile_anhui
     *
     * @var string
     */
    public $line;

    /**
     * @description The method that is used to sort the returned DNS records. By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     *
     * @example default
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **500**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The resource record (RR) keyword based on which the system queries DNS records. The system queries DNS records based on the value of this parameter in fuzzy match mode. The value is not case-sensitive.
     *
     * @example www
     *
     * @var string
     */
    public $RRKeyWord;

    /**
     * @description The search mode. Valid values: **LIKE, EXACT, and ADVANCED**.
     *
     *   If you set this parameter to LIKE or EXACT, specify the KeyWord parameter.In this case, the RRKeyWord, TypeKeyWord, ValueKeyWord, Type, Line, and Status parameters are ignored.
     *
     *   If you set this parameter to ADVANCED, specify the RRKeyWord, TypeKeyWord, ValueKeyWord, Type, Line, and Status parameters.
     *
     *   If you do not specify this parameter, the system determines the search mode based on the following rules:
     *
     *   If the KeyWord parameter is specified, the system uses the LIKE mode.
     *   If the KeyWord parameter is not specified, the system queries DNS records based on values of the RRKeyWord and ValueKeyWord parameters in fuzzy match mode, and based on the values of the TypeKeyWord, Type, Line, and Status parameters in exact match mode.
     *
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The status of the DNS records to query. Valid values: **Enable and Disable**.
     *
     * @example Enable
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the DNS records to query. For more information, see the following topic:
     *
     * [DNS record types](https://www.alibabacloud.com/help/zh/doc-detail/29805.htm)
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @description The type keyword based on which the system queries DNS records. The system queries DNS records based on the value of this parameter in exact match mode. The value is not case-sensitive.
     *
     * @example MX
     *
     * @var string
     */
    public $typeKeyWord;

    /**
     * @description The record value keyword based on which the system queries DNS records. The system queries DNS records based on the value of this parameter in fuzzy match mode. The value is not case-sensitive.
     *
     * @example com
     *
     * @var string
     */
    public $valueKeyWord;
    protected $_name = [
        'direction'    => 'Direction',
        'domainName'   => 'DomainName',
        'groupId'      => 'GroupId',
        'keyWord'      => 'KeyWord',
        'lang'         => 'Lang',
        'line'         => 'Line',
        'orderBy'      => 'OrderBy',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'RRKeyWord'    => 'RRKeyWord',
        'searchMode'   => 'SearchMode',
        'status'       => 'Status',
        'type'         => 'Type',
        'typeKeyWord'  => 'TypeKeyWord',
        'valueKeyWord' => 'ValueKeyWord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->RRKeyWord) {
            $res['RRKeyWord'] = $this->RRKeyWord;
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeKeyWord) {
            $res['TypeKeyWord'] = $this->typeKeyWord;
        }
        if (null !== $this->valueKeyWord) {
            $res['ValueKeyWord'] = $this->valueKeyWord;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RRKeyWord'])) {
            $model->RRKeyWord = $map['RRKeyWord'];
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeKeyWord'])) {
            $model->typeKeyWord = $map['TypeKeyWord'];
        }
        if (isset($map['ValueKeyWord'])) {
            $model->valueKeyWord = $map['ValueKeyWord'];
        }

        return $model;
    }
}
