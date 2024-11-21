<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListRecordsRequest extends Model
{
    /**
     * @description The business scenario of the record for acceleration. Valid values:
     *
     *   **image_video**: video and image.
     *   **api**: API.
     *   **web**: web page.
     *
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **500**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Filters by whether the record is proxied. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @description The match mode to search for the record name. Default value: exact. Valid values:
     *
     *   **prefix**: match by prefix.
     *   **suffix**: match by suffix.
     *   **exact**: exact match.
     *   **fuzzy**: fuzzy match.
     *
     * @example fuzzy
     *
     * @var string
     */
    public $recordMatchType;

    /**
     * @description The record name. This parameter specifies a filter condition for the query.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The origin type of the record. Only CNAME records can be filtered by using this field. Valid values:
     *
     *   **OSS**: OSS bucket.
     *   **S3**: S3 bucket.
     *   **LB**: load balancer.
     *   **OP**: origin pool.
     *   **Domain**: domain name.
     *
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The DNS record type.
     *
     * @example CNAME
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizName'         => 'BizName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'proxied'         => 'Proxied',
        'recordMatchType' => 'RecordMatchType',
        'recordName'      => 'RecordName',
        'siteId'          => 'SiteId',
        'sourceType'      => 'SourceType',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->proxied) {
            $res['Proxied'] = $this->proxied;
        }
        if (null !== $this->recordMatchType) {
            $res['RecordMatchType'] = $this->recordMatchType;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Proxied'])) {
            $model->proxied = $map['Proxied'];
        }
        if (isset($map['RecordMatchType'])) {
            $model->recordMatchType = $map['RecordMatchType'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
