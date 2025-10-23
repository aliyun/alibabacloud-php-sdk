<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailResponseBody\detail\ipPool;

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
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'ipPool' => 'IpPool',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->ipPool) {
            $this->ipPool->validate();
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
