<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDestinationResponseBody\destinations;

use AlibabaCloud\Tea\Model;

class destinations extends Model
{
    /**
     * @example {"topic":"/a1POX0c****\/device1/user/get","topicType":1}
     *
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1003
     *
     * @var int
     */
    public $destinationId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isFailover;

    /**
     * @example DataPurpose
     *
     * @var string
     */
    public $name;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example REPUBLISH
     *
     * @var string
     */
    public $type;

    /**
     * @example 2022-03-27T12:45:43.000Z
     *
     * @var string
     */
    public $utcCreated;
    protected $_name = [
        'configuration' => 'Configuration',
        'description'   => 'Description',
        'destinationId' => 'DestinationId',
        'isFailover'    => 'IsFailover',
        'name'          => 'Name',
        'status'        => 'Status',
        'type'          => 'Type',
        'utcCreated'    => 'UtcCreated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->isFailover) {
            $res['IsFailover'] = $this->isFailover;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['IsFailover'])) {
            $model->isFailover = $map['IsFailover'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }

        return $model;
    }
}
