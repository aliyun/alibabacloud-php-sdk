<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeZoneRecordsRequest extends Model
{
    /**
     * @description The hostname keyword based on which the system queries the DNS records.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100. Default value: 20.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search mode. Valid values:
     *
     *   **LIKE**: fuzzy search
     *   **EXACT (default)**: exact search
     *
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The tags added to the DNS record.
     *
     *   This parameter is left empty by default. In this case, the DNS records of the zone are queried.
     *   If you set Tag to ecs, the DNS records added to the hostnames of Elastic Compute Service (ECS) instances in the zone are queried.
     *
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     * @example CAgICA1OA_58
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'keyword'      => 'Keyword',
        'lang'         => 'Lang',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'searchMode'   => 'SearchMode',
        'tag'          => 'Tag',
        'userClientIp' => 'UserClientIp',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZoneRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
