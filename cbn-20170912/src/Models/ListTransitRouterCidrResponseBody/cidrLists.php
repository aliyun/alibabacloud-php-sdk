<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrResponseBody;

use AlibabaCloud\Dara\Model;

class cidrLists extends Model
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
    public $family;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $publishCidrRoute;

    /**
     * @var string
     */
    public $transitRouterCidrId;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cidr' => 'Cidr',
        'description' => 'Description',
        'family' => 'Family',
        'name' => 'Name',
        'publishCidrRoute' => 'PublishCidrRoute',
        'transitRouterCidrId' => 'TransitRouterCidrId',
        'transitRouterId' => 'TransitRouterId',
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

        if (null !== $this->family) {
            $res['Family'] = $this->family;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->publishCidrRoute) {
            $res['PublishCidrRoute'] = $this->publishCidrRoute;
        }

        if (null !== $this->transitRouterCidrId) {
            $res['TransitRouterCidrId'] = $this->transitRouterCidrId;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
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

        if (isset($map['Family'])) {
            $model->family = $map['Family'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PublishCidrRoute'])) {
            $model->publishCidrRoute = $map['PublishCidrRoute'];
        }

        if (isset($map['TransitRouterCidrId'])) {
            $model->transitRouterCidrId = $map['TransitRouterCidrId'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
