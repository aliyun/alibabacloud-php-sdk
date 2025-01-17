<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRequest;

use AlibabaCloud\Dara\Model;

class transitRouterCidrList extends Model
{
    /**
     * @var string
     */
    public $cidr;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $publishCidrRoute;
    protected $_name = [
        'cidr'             => 'Cidr',
        'description'      => 'Description',
        'name'             => 'Name',
        'publishCidrRoute' => 'PublishCidrRoute',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->publishCidrRoute) {
            $res['PublishCidrRoute'] = $this->publishCidrRoute;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PublishCidrRoute'])) {
            $model->publishCidrRoute = $map['PublishCidrRoute'];
        }

        return $model;
    }
}
