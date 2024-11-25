<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeZoneRecordsRequest extends Model
{
    /**
     * @description The keyword of the hostname. The value is not case-sensitive. You can set SearchMode to LIKE or EXACT. The default value of SearchMode is EXACT.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
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
     *   **EXACT** (default): exact search
     *
     * The value of Keyword is the search scope.
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The tag added to the DNS record. Valid values:
     *
     *   ecs: If you set Tag to ecs, the DNS records added to the hostnames of Elastic Compute Service (ECS) instances in the zone are queried.
     *   If Tag is left empty, the DNS records in the zone are queried.
     *
     * @example ecs
     *
     * @var string
     */
    public $tag;

    /**
     * @description The IP address of the client.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The zone ID. This ID uniquely identifies the zone.
     *
     * This parameter is required.
     * @example a96d70eb4ab8ef01503dc5486914****
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
