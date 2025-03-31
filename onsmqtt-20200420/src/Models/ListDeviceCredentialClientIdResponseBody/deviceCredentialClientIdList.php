<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $pageNo;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'clientIdList' => 'ClientIdList',
        'nextToken' => 'NextToken',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->clientIdList)) {
            Model::validateArray($this->clientIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIdList) {
            if (\is_array($this->clientIdList)) {
                $res['ClientIdList'] = [];
                $n1 = 0;
                foreach ($this->clientIdList as $item1) {
                    $res['ClientIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIdList'])) {
            if (!empty($map['ClientIdList'])) {
                $model->clientIdList = [];
                $n1 = 0;
                foreach ($map['ClientIdList'] as $item1) {
                    $model->clientIdList[$n1++] = $item1;
                }
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
