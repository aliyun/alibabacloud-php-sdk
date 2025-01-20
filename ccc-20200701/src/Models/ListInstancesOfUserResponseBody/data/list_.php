<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserResponseBody\data\list_\adminList;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserResponseBody\data\list_\numberList;

class list_ extends Model
{
    /**
     * @var adminList[]
     */
    public $adminList;
    /**
     * @var string
     */
    public $aliyunUid;
    /**
     * @var string
     */
    public $consoleUrl;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $domainName;
    /**
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
     * @var string
     */
    public $status;
    protected $_name = [
        'adminList'   => 'AdminList',
        'aliyunUid'   => 'AliyunUid',
        'consoleUrl'  => 'ConsoleUrl',
        'description' => 'Description',
        'domainName'  => 'DomainName',
        'id'          => 'Id',
        'name'        => 'Name',
        'numberList'  => 'NumberList',
        'status'      => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->adminList)) {
            Model::validateArray($this->adminList);
        }
        if (\is_array($this->numberList)) {
            Model::validateArray($this->numberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminList) {
            if (\is_array($this->adminList)) {
                $res['AdminList'] = [];
                $n1               = 0;
                foreach ($this->adminList as $item1) {
                    $res['AdminList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
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
            if (\is_array($this->numberList)) {
                $res['NumberList'] = [];
                $n1                = 0;
                foreach ($this->numberList as $item1) {
                    $res['NumberList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n1               = 0;
                foreach ($map['AdminList'] as $item1) {
                    $model->adminList[$n1++] = adminList::fromMap($item1);
                }
            }
        }

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
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
                $n1                = 0;
                foreach ($map['NumberList'] as $item1) {
                    $model->numberList[$n1++] = numberList::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
