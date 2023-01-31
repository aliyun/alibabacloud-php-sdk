<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeVbrHaResponseBody extends Model
{
    /**
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @example VBRHa
     *
     * @var string
     */
    public $name;

    /**
     * @example vbr-bp12mw1f8k3jgygk9****
     *
     * @var string
     */
    public $peerVbrId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example vbrha-sa1sxheuxtd98****
     *
     * @var string
     */
    public $vbrHaId;

    /**
     * @example vbr-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $vbrId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'name'         => 'Name',
        'peerVbrId'    => 'PeerVbrId',
        'regionId'     => 'RegionId',
        'requestId'    => 'RequestId',
        'status'       => 'Status',
        'vbrHaId'      => 'VbrHaId',
        'vbrId'        => 'VbrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->peerVbrId) {
            $res['PeerVbrId'] = $this->peerVbrId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vbrHaId) {
            $res['VbrHaId'] = $this->vbrHaId;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVbrHaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PeerVbrId'])) {
            $model->peerVbrId = $map['PeerVbrId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VbrHaId'])) {
            $model->vbrHaId = $map['VbrHaId'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        return $model;
    }
}
