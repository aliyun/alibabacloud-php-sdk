<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkAttributeRequest extends Model
{
    /**
     * @description The description of the network.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with http:// or https://.
     * @example this is my first network
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the network.
     *
     * This parameter is required.
     * @example n-****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The name of the network. The name must meet the following requirements:
     *
     *   The name must be 2 to 128 characters in length
     *   It must start with a letter but cannot start with http:// or https://.
     *   The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example abc
     *
     * @var string
     */
    public $networkName;
    protected $_name = [
        'description' => 'Description',
        'networkId'   => 'NetworkId',
        'networkName' => 'NetworkName',
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
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->networkName) {
            $res['NetworkName'] = $this->networkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNetworkAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['NetworkName'])) {
            $model->networkName = $map['NetworkName'];
        }

        return $model;
    }
}
