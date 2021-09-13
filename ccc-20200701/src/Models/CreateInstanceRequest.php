<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $name;

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
    public $numberList;

    /**
     * @var string
     */
    public $adminRamIdList;
    protected $_name = [
        'name'           => 'Name',
        'description'    => 'Description',
        'domainName'     => 'DomainName',
        'numberList'     => 'NumberList',
        'adminRamIdList' => 'AdminRamIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }
        if (null !== $this->adminRamIdList) {
            $res['AdminRamIdList'] = $this->adminRamIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }
        if (isset($map['AdminRamIdList'])) {
            $model->adminRamIdList = $map['AdminRamIdList'];
        }

        return $model;
    }
}
