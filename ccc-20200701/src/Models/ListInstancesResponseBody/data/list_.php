<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponseBody\data\list_\adminList;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponseBody\data\list_\numberList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var adminList[]
     */
    public $adminList;

    /**
     * @example 157123456789****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @example https://ccc-v2.aliyun.com/#/workbench/ccc-test
     *
     * @var string
     */
    public $consoleUrl;

    /**
     * @example 1624679747000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $domainName;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var numberList[]
     */
    public $numberList;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'adminList'   => 'AdminList',
        'aliyunUid'   => 'AliyunUid',
        'consoleUrl'  => 'ConsoleUrl',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'domainName'  => 'DomainName',
        'id'          => 'Id',
        'name'        => 'Name',
        'numberList'  => 'NumberList',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminList) {
            $res['AdminList'] = [];
            if (null !== $this->adminList && \is_array($this->adminList)) {
                $n = 0;
                foreach ($this->adminList as $item) {
                    $res['AdminList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = [];
            if (null !== $this->numberList && \is_array($this->numberList)) {
                $n = 0;
                foreach ($this->numberList as $item) {
                    $res['NumberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n                = 0;
                foreach ($map['AdminList'] as $item) {
                    $model->adminList[$n++] = null !== $item ? adminList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NumberList'])) {
            if (!empty($map['NumberList'])) {
                $model->numberList = [];
                $n                 = 0;
                foreach ($map['NumberList'] as $item) {
                    $model->numberList[$n++] = null !== $item ? numberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
