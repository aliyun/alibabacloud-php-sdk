<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdResponseBody;

use AlibabaCloud\Tea\Model;

class deviceCredentialClientIdList extends Model
{
    /**
     * @description Client list.
     *
     * @var string[]
     */
    public $clientIdList;

    /**
     * @description Indicates whether there is a token (Token) for the next query. Values:
     * - If there is a next query, the value should be the NextToken returned from the previous API call.
     * @example 634dxxxxx75b5f
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The current page number of the returned query records.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The maximum number of results to display per page.
     *
     * @example 100
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description Total number of query results.
     *
     * @example 10
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'clientIdList' => 'ClientIdList',
        'nextToken'    => 'NextToken',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIdList) {
            $res['ClientIdList'] = $this->clientIdList;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceCredentialClientIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIdList'])) {
            if (!empty($map['ClientIdList'])) {
                $model->clientIdList = $map['ClientIdList'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
