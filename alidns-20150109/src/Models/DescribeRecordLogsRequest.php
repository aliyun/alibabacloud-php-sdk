<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordLogsRequest extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The keyword for searches in %KeyWord% mode. The value is not case-sensitive.
     *
     * @example test
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the **yyyy-MM-ddTHH:mm:ssZ** format.
     *
     * @example 2015-12-12
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the **yyyy-MM-ddTHH:mm:ssZ** format.
     *
     * @example 2015-12-12
     *
     * @var string
     */
    public $endDate;
    protected $_name = [
        'domainName'   => 'DomainName',
        'keyWord'      => 'KeyWord',
        'lang'         => 'Lang',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'startDate'    => 'StartDate',
        'userClientIp' => 'UserClientIp',
        'endDate'      => 'endDate',
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
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        return $model;
    }
}
