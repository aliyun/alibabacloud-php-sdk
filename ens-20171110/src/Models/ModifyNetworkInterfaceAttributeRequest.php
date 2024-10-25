<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkInterfaceAttributeRequest extends Model
{
    /**
     * @description The description. The description must be 1 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ENI.
     *
     * This parameter is required.
     * @example eni-5f6533jbifugr5fo***
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The name of the ENI. The name must be 1 to 128 characters in length, The name cannot start with http:// or https://.
     *
     * @example test-01
     *
     * @var string
     */
    public $networkInterfaceName;
    protected $_name = [
        'description'          => 'Description',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNetworkInterfaceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }

        return $model;
    }
}
