<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $keyWord;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $RRKeyWord;

    /**
     * @var string
     */
    public $searchMode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeKeyWord;

    /**
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
