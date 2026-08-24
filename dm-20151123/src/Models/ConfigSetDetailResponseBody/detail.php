<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailResponseBody\detail\ipPool;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailResponseBody\detail\validationOption;

class detail extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var ipPool
     */
    public $ipPool;

    /**
     * @var bool
     */
    public $isPublicChannelBackoff;

    /**
     * @var string
     */
    public $name;

    /**
     * @var validationOption
     */
    public $validationOption;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'ipPool' => 'IpPool',
        'isPublicChannelBackoff' => 'IsPublicChannelBackoff',
        'name' => 'Name',
        'validationOption' => 'ValidationOption',
    ];

    public function validate()
    {
        if (null !== $this->ipPool) {
            $this->ipPool->validate();
        }
        if (null !== $this->validationOption) {
            $this->validationOption->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ipPool) {
            $res['IpPool'] = null !== $this->ipPool ? $this->ipPool->toArray($noStream) : $this->ipPool;
        }

        if (null !== $this->isPublicChannelBackoff) {
            $res['IsPublicChannelBackoff'] = $this->isPublicChannelBackoff;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->validationOption) {
            $res['ValidationOption'] = null !== $this->validationOption ? $this->validationOption->toArray($noStream) : $this->validationOption;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IpPool'])) {
            $model->ipPool = ipPool::fromMap($map['IpPool']);
        }

        if (isset($map['IsPublicChannelBackoff'])) {
            $model->isPublicChannelBackoff = $map['IsPublicChannelBackoff'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ValidationOption'])) {
            $model->validationOption = validationOption::fromMap($map['ValidationOption']);
        }

        return $model;
    }
}
