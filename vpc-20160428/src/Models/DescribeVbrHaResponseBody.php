<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class DescribeVbrHaResponseBody extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $peerVbrId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vbrHaId;

    /**
     * @var string
     */
    public $vbrId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'name' => 'Name',
        'peerVbrId' => 'PeerVbrId',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'vbrHaId' => 'VbrHaId',
        'vbrId' => 'VbrId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
