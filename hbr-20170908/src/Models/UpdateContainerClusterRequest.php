<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateContainerClusterRequest extends Model
{
    /**
     * @example cc-000**************134
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example description ack pv backup
     *
     * @var string
     */
    public $description;

    /**
     * @example ack_pv_backup_location
     *
     * @var string
     */
    public $name;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example false
     *
     * @var bool
     */
    public $renewToken;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'description' => 'Description',
        'name'        => 'Name',
        'networkType' => 'NetworkType',
        'renewToken'  => 'RenewToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->renewToken) {
            $res['RenewToken'] = $this->renewToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RenewToken'])) {
            $model->renewToken = $map['RenewToken'];
        }

        return $model;
    }
}
