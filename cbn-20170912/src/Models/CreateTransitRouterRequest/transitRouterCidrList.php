<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRequest;

use AlibabaCloud\Tea\Model;

class transitRouterCidrList extends Model
{
    /**
     * @description The CIDR block of the transit router.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description of the CIDR block.
     *
     * The description must be 1 to 256 characters in length.
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the CIDR block.
     *
     * The name must be 1 to 128 characters in length.
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to allow the system to automatically add a route that points to the CIDR block to the route table of the transit router.
     *
     *   **true** (default): yes.
     *
     * The blackhole route is only advertised to the route table of the virtual border router (VBR) that is connected to the transit router.
     *
     *   **false**: no.
     *
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return transitRouterCidrList
     */
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
