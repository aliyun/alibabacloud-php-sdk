<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailResponseBody\data\resourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description The description.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The encryption type. Valid values:
     *
     *   RSA
     *   OCT
     *
     * @example RSA
     *
     * @var string
     */
    public $encodeType;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-7ea3da97b96543e19f6c597cd4a9****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the consumer authentication record was created.
     *
     * @example 2031-03-30 02:35:12
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the consumer authentication record was modified.
     *
     * @example 2023-02-01 14:17:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the consumer.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The JWT public key. The JSON format is supported.
     *
     * @example {
     * }
     * @var string
     */
    public $jwks;

    /**
     * @description The name of the key used for JWT-based identity authentication.
     *
     * @example iss
     *
     * @var string
     */
    public $keyName;

    /**
     * @description The value of the key used for JWT-based identity authentication.
     *
     * @example abcd
     *
     * @var string
     */
    public $keyValue;

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
     * @description The resource list.
     *
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @description The names of the parameters that are required to verify each token. By default, each token is prefixed with Bearer and stored in the Authorization header, such as `Authorization: Bearer <Content of a token>`.
     *
     * @example Authorization
     *
     * @var string
     */
    public $tokenName;

    /**
     * @description Specifies whether to enable pass-through.
     *
     * @example true
     *
     * @var bool
     */
    public $tokenPass;

    /**
     * @description The positions of the parameters that are required to verify each token. By default, each token is prefixed with Bearer and stored in the Authorization header, such as `Authorization: Bearer <Content of a token>`.
     *
     * @example HEADER
     *
     * @var string
     */
    public $tokenPosition;

    /**
     * @description The prefixes of the parameters that are required to verify each token. By default, each token is prefixed with Bearer and stored in the Authorization header, such as `Authorization: Bearer <Content of a token>`.
     *
     * @example Bearer
     *
     * @var string
     */
    public $tokenPrefix;

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
        'encodeType'      => 'EncodeType',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'jwks'            => 'Jwks',
        'keyName'         => 'KeyName',
        'keyValue'        => 'KeyValue',
        'name'            => 'Name',
        'primaryUser'     => 'PrimaryUser',
        'resourceList'    => 'ResourceList',
        'tokenName'       => 'TokenName',
        'tokenPass'       => 'TokenPass',
        'tokenPosition'   => 'TokenPosition',
        'tokenPrefix'     => 'TokenPrefix',
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
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
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
        if (null !== $this->jwks) {
            $res['Jwks'] = $this->jwks;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->keyValue) {
            $res['KeyValue'] = $this->keyValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tokenName) {
            $res['TokenName'] = $this->tokenName;
        }
        if (null !== $this->tokenPass) {
            $res['TokenPass'] = $this->tokenPass;
        }
        if (null !== $this->tokenPosition) {
            $res['TokenPosition'] = $this->tokenPosition;
        }
        if (null !== $this->tokenPrefix) {
            $res['TokenPrefix'] = $this->tokenPrefix;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
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
        if (isset($map['Jwks'])) {
            $model->jwks = $map['Jwks'];
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }
        if (isset($map['KeyValue'])) {
            $model->keyValue = $map['KeyValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n                   = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TokenName'])) {
            $model->tokenName = $map['TokenName'];
        }
        if (isset($map['TokenPass'])) {
            $model->tokenPass = $map['TokenPass'];
        }
        if (isset($map['TokenPosition'])) {
            $model->tokenPosition = $map['TokenPosition'];
        }
        if (isset($map['TokenPrefix'])) {
            $model->tokenPrefix = $map['TokenPrefix'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
