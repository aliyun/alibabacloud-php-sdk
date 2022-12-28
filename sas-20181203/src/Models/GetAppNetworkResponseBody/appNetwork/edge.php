<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork;

use AlibabaCloud\Tea\Model;

class edge extends Model
{
    /**
     * @example 102
     *
     * @var string
     */
    public $dstNodeId;

    /**
     * @example app
     *
     * @var string
     */
    public $dstNodeType;

    /**
     * @example 3534
     *
     * @var string
     */
    public $id;

    /**
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @example 101
     *
     * @var string
     */
    public $srcNodeId;

    /**
     * @example app
     *
     * @var string
     */
    public $srcNodeType;
    protected $_name = [
        'dstNodeId'   => 'DstNodeId',
        'dstNodeType' => 'DstNodeType',
        'id'          => 'Id',
        'port'        => 'Port',
        'srcNodeId'   => 'SrcNodeId',
        'srcNodeType' => 'SrcNodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstNodeId) {
            $res['DstNodeId'] = $this->dstNodeId;
        }
        if (null !== $this->dstNodeType) {
            $res['DstNodeType'] = $this->dstNodeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->srcNodeId) {
            $res['SrcNodeId'] = $this->srcNodeId;
        }
        if (null !== $this->srcNodeType) {
            $res['SrcNodeType'] = $this->srcNodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstNodeId'])) {
            $model->dstNodeId = $map['DstNodeId'];
        }
        if (isset($map['DstNodeType'])) {
            $model->dstNodeType = $map['DstNodeType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SrcNodeId'])) {
            $model->srcNodeId = $map['SrcNodeId'];
        }
        if (isset($map['SrcNodeType'])) {
            $model->srcNodeType = $map['SrcNodeType'];
        }

        return $model;
    }
}
