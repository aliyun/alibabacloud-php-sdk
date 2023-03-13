<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesRequest;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 457db5ca-241d-11ed-9fd7-acde48001122
     *
     * @var string
     */
    public $hostname;

    /**
     * @example m-8vbf8rpv2nn14y7oybjy
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ***
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @example e01-cn-zvp2tgykr0b
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'hostname'      => 'Hostname',
        'imageId'       => 'ImageId',
        'loginPassword' => 'LoginPassword',
        'nodeId'        => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
