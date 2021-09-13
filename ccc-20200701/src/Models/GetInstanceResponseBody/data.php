<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data\adminList;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data\numberList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $aliyunUid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var adminList[]
     */
    public $adminList;

    /**
     * @var numberList[]
     */
    public $numberList;
    protected $_name = [
        'status'      => 'Status',
        'consoleUrl'  => 'ConsoleUrl',
        'description' => 'Description',
        'aliyunUid'   => 'AliyunUid',
        'name'        => 'Name',
        'domainName'  => 'DomainName',
        'id'          => 'Id',
        'adminList'   => 'AdminList',
        'numberList'  => 'NumberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->adminList) {
            $res['AdminList'] = [];
            if (null !== $this->adminList && \is_array($this->adminList)) {
                $n = 0;
                foreach ($this->adminList as $item) {
                    $res['AdminList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n                = 0;
                foreach ($map['AdminList'] as $item) {
                    $model->adminList[$n++] = null !== $item ? adminList::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
