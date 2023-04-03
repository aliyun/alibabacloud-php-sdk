<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainLogsRequest extends Model
{
    /**
     * @description The ID of the domain name group.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The keyword for the query in "%KeyWord%" mode. The keyword is not case-sensitive.
     *
     * @example test
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The language in which you want the values of some response parameters to be returned. These response parameters support multiple languages.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number to return. The page number starts from **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return per page. Maximum value: **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The start time for the query. Format: **YYYY-MM-DD**
     *
     * @example 2019-07-04
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The type of object of which you want to query operation logs. Valid values:
     *
     *   domain: domain name
     *   slavedns: secondary Domain Name System (DNS)
     *
     * @example domain
     *
     * @var string
     */
    public $type;

    /**
     * @description The end time for the query. Format: **YYYY-MM-DD**
     *
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;
    protected $_name = [
        'groupId'    => 'GroupId',
        'keyWord'    => 'KeyWord',
        'lang'       => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'startDate'  => 'StartDate',
        'type'       => 'Type',
        'endDate'    => 'endDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        return $model;
    }
}
