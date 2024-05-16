<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionRequest extends Model
{
    /**
     * @description The ID of the data source.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $connectionId;

    /**
     * @description Details of the data source.
     *
     * @example {"database":"dbname","instanceName":"instancename","password":"password","rdsOwnerId":"123","username":"username"}
     *
     * @var string
     */
    public $content;

    /**
     * @description Describes the data source.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description Environment of the data source.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The status of the data source.
     *
     * @example ENABLED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'connectionId' => 'ConnectionId',
        'content'      => 'Content',
        'description'  => 'Description',
        'envType'      => 'EnvType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
