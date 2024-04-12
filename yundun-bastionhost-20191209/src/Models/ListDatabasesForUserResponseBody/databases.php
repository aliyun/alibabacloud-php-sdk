<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesForUserResponseBody;

use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @example Private
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example 36
     *
     * @var string
     */
    public $databaseId;

    /**
     * @example MySQL56
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 3306
     *
     * @var int
     */
    public $databasePort;

    /**
     * @example rm-wz97******
     *
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @example rm-uf65******
     *
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @example 2
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @example i-wz9fv2hwux78x9h1pmje
     *
     * @var string
     */
    public $sourceInstanceId;
    protected $_name = [
        'activeAddressType'      => 'ActiveAddressType',
        'comment'                => 'Comment',
        'databaseId'             => 'DatabaseId',
        'databaseName'           => 'DatabaseName',
        'databasePort'           => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress'  => 'DatabasePublicAddress',
        'databaseType'           => 'DatabaseType',
        'networkDomainId'        => 'NetworkDomainId',
        'source'                 => 'Source',
        'sourceInstanceId'       => 'SourceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databasePort) {
            $res['DatabasePort'] = $this->databasePort;
        }
        if (null !== $this->databasePrivateAddress) {
            $res['DatabasePrivateAddress'] = $this->databasePrivateAddress;
        }
        if (null !== $this->databasePublicAddress) {
            $res['DatabasePublicAddress'] = $this->databasePublicAddress;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabasePort'])) {
            $model->databasePort = $map['DatabasePort'];
        }
        if (isset($map['DatabasePrivateAddress'])) {
            $model->databasePrivateAddress = $map['DatabasePrivateAddress'];
        }
        if (isset($map['DatabasePublicAddress'])) {
            $model->databasePublicAddress = $map['DatabasePublicAddress'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        return $model;
    }
}
