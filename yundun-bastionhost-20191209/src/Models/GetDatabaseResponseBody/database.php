<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseResponseBody;

use AlibabaCloud\Dara\Model;

class database extends Model
{
    /**
     * @var string
     */
    public $activeAddressType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $databasePort;

    /**
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $networkDomainId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $sourceInstanceRegionId;

    /**
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'comment' => 'Comment',
        'databaseId' => 'DatabaseId',
        'databaseName' => 'DatabaseName',
        'databasePort' => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress' => 'DatabasePublicAddress',
        'databaseType' => 'DatabaseType',
        'networkDomainId' => 'NetworkDomainId',
        'source' => 'Source',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceInstanceRegionId' => 'SourceInstanceRegionId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->sourceInstanceRegionId) {
            $res['SourceInstanceRegionId'] = $this->sourceInstanceRegionId;
        }

        if (null !== $this->sourceInstanceState) {
            $res['SourceInstanceState'] = $this->sourceInstanceState;
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

        if (isset($map['SourceInstanceRegionId'])) {
            $model->sourceInstanceRegionId = $map['SourceInstanceRegionId'];
        }

        if (isset($map['SourceInstanceState'])) {
            $model->sourceInstanceState = $map['SourceInstanceState'];
        }

        return $model;
    }
}
