<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data\gdnInstanceList\memberList;
use AlibabaCloud\Tea\Model;

class gdnInstanceList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example gdn-***
     *
     * @var string
     */
    public $gdnInstanceName;

    /**
     * @example 2025-01-02T13:11:10.000+0000
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @var memberList[]
     */
    public $memberList;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $mysqlVersion;

    /**
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @example ""
     *
     * @var string
     */
    public $switchHistory;
    protected $_name = [
        'description'     => 'Description',
        'gdnInstanceName' => 'GdnInstanceName',
        'gmtCreated'      => 'GmtCreated',
        'memberList'      => 'MemberList',
        'mysqlVersion'    => 'MysqlVersion',
        'status'          => 'Status',
        'switchHistory'   => 'SwitchHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gdnInstanceName) {
            $res['GdnInstanceName'] = $this->gdnInstanceName;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->memberList) {
            $res['MemberList'] = [];
            if (null !== $this->memberList && \is_array($this->memberList)) {
                $n = 0;
                foreach ($this->memberList as $item) {
                    $res['MemberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mysqlVersion) {
            $res['MysqlVersion'] = $this->mysqlVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->switchHistory) {
            $res['SwitchHistory'] = $this->switchHistory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gdnInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GdnInstanceName'])) {
            $model->gdnInstanceName = $map['GdnInstanceName'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n                 = 0;
                foreach ($map['MemberList'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MysqlVersion'])) {
            $model->mysqlVersion = $map['MysqlVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SwitchHistory'])) {
            $model->switchHistory = $map['SwitchHistory'];
        }

        return $model;
    }
}
