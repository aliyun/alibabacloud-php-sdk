<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $adminRamIdList;

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
    public $name;

    /**
     * @var string
     */
    public $numberList;
    protected $_name = [
        'adminRamIdList' => 'AdminRamIdList',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'name' => 'Name',
        'numberList' => 'NumberList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminRamIdList) {
            $res['AdminRamIdList'] = $this->adminRamIdList;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
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
        if (isset($map['AdminRamIdList'])) {
            $model->adminRamIdList = $map['AdminRamIdList'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }

        return $model;
    }
}
