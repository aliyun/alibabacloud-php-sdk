<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdResponseBody;

use AlibabaCloud\Tea\Model;

class deviceCredentialClientIdList extends Model
{
    /**
     * @var string[]
     */
    public $clientIdList;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @example 100
     *
     * @var string
     */
    public $pageSize;

    /**
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
