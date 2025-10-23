<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetListResponseBody\configSets\ipPool;

class configSets extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $fromAddresses;

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
        'fromAddresses' => 'FromAddresses',
        'id' => 'Id',
        'ipPool' => 'IpPool',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->fromAddresses)) {
            Model::validateArray($this->fromAddresses);
        }
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

        if (null !== $this->fromAddresses) {
            if (\is_array($this->fromAddresses)) {
                $res['FromAddresses'] = [];
                $n1 = 0;
                foreach ($this->fromAddresses as $item1) {
                    $res['FromAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['FromAddresses'])) {
            if (!empty($map['FromAddresses'])) {
                $model->fromAddresses = [];
                $n1 = 0;
                foreach ($map['FromAddresses'] as $item1) {
                    $model->fromAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
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
