<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data\gdnInstanceList\memberList;

class gdnInstanceList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gdnInstanceName;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var memberList[]
     */
    public $memberList;

    /**
     * @var string
     */
    public $mysqlVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $switchHistory;
    protected $_name = [
        'description' => 'Description',
        'gdnInstanceName' => 'GdnInstanceName',
        'gmtCreated' => 'GmtCreated',
        'memberList' => 'MemberList',
        'mysqlVersion' => 'MysqlVersion',
        'status' => 'Status',
        'switchHistory' => 'SwitchHistory',
    ];

    public function validate()
    {
        if (\is_array($this->memberList)) {
            Model::validateArray($this->memberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->memberList)) {
                $res['MemberList'] = [];
                $n1 = 0;
                foreach ($this->memberList as $item1) {
                    $res['MemberList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['MemberList'] as $item1) {
                    $model->memberList[$n1++] = memberList::fromMap($item1);
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
