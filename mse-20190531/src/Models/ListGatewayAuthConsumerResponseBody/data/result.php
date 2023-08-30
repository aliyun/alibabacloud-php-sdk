<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthConsumerResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The status of the consumer. Valid values:
     *
     *   true: enabled
     *   false: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $consumerStatus;

    /**
     * @description The description of the consumer.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14centbrveca****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2021-09-13 19:24:23
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the consumer.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the consumer.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The creator.
     *
     * @example 123
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The authentication type. Valid values:
     *
     *   JWT
     *
     * @example JWT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'consumerStatus'  => 'ConsumerStatus',
        'description'     => 'Description',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'name'            => 'Name',
        'primaryUser'     => 'PrimaryUser',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerStatus) {
            $res['ConsumerStatus'] = $this->consumerStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerStatus'])) {
            $model->consumerStatus = $map['ConsumerStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
