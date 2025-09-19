<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork;

use AlibabaCloud\Dara\Model;

class edge extends Model
{
    /**
     * @var string
     */
    public $dstNodeId;

    /**
     * @var string
     */
    public $dstNodeType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $srcNodeId;

    /**
     * @var string
     */
    public $srcNodeType;
    protected $_name = [
        'dstNodeId' => 'DstNodeId',
        'dstNodeType' => 'DstNodeType',
        'id' => 'Id',
        'port' => 'Port',
        'srcNodeId' => 'SrcNodeId',
        'srcNodeType' => 'SrcNodeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
