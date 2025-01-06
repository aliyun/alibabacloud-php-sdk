<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayInstanceRequest;

use AlibabaCloud\Tea\Model;

class confluentConfig extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $connectCU;

    /**
     * @example 2
     *
     * @var int
     */
    public $connectReplica;

    /**
     * @example 4
     *
     * @var int
     */
    public $controlCenterCU;

    /**
     * @example 1
     *
     * @var int
     */
    public $controlCenterReplica;

    /**
     * @example 300
     *
     * @var int
     */
    public $controlCenterStorage;

    /**
     * @example 4
     *
     * @var int
     */
    public $kafkaCU;

    /**
     * @example 3
     *
     * @var int
     */
    public $kafkaReplica;

    /**
     * @example 4
     *
     * @var int
     */
    public $kafkaRestProxyCU;

    /**
     * @example 2
     *
     * @var int
     */
    public $kafkaRestProxyReplica;

    /**
     * @example 800
     *
     * @var int
     */
    public $kafkaStorage;

    /**
     * @example 4
     *
     * @var int
     */
    public $ksqlCU;

    /**
     * @example 2
     *
     * @var int
     */
    public $ksqlReplica;

    /**
     * @example 100
     *
     * @var int
     */
    public $ksqlStorage;

    /**
     * @example 1
     *
     * @var int
     */
    public $schemaRegistryCU;

    /**
     * @example 2
     *
     * @var int
     */
    public $schemaRegistryReplica;

    /**
     * @example 2
     *
     * @var int
     */
    public $zooKeeperCU;

    /**
     * @example 3
     *
     * @var int
     */
    public $zooKeeperReplica;

    /**
     * @example 100
     *
     * @var int
     */
    public $zooKeeperStorage;
    protected $_name = [
        'connectCU'             => 'ConnectCU',
        'connectReplica'        => 'ConnectReplica',
        'controlCenterCU'       => 'ControlCenterCU',
        'controlCenterReplica'  => 'ControlCenterReplica',
        'controlCenterStorage'  => 'ControlCenterStorage',
        'kafkaCU'               => 'KafkaCU',
        'kafkaReplica'          => 'KafkaReplica',
        'kafkaRestProxyCU'      => 'KafkaRestProxyCU',
        'kafkaRestProxyReplica' => 'KafkaRestProxyReplica',
        'kafkaStorage'          => 'KafkaStorage',
        'ksqlCU'                => 'KsqlCU',
        'ksqlReplica'           => 'KsqlReplica',
        'ksqlStorage'           => 'KsqlStorage',
        'schemaRegistryCU'      => 'SchemaRegistryCU',
        'schemaRegistryReplica' => 'SchemaRegistryReplica',
        'zooKeeperCU'           => 'ZooKeeperCU',
        'zooKeeperReplica'      => 'ZooKeeperReplica',
        'zooKeeperStorage'      => 'ZooKeeperStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectCU) {
            $res['ConnectCU'] = $this->connectCU;
        }
        if (null !== $this->connectReplica) {
            $res['ConnectReplica'] = $this->connectReplica;
        }
        if (null !== $this->controlCenterCU) {
            $res['ControlCenterCU'] = $this->controlCenterCU;
        }
        if (null !== $this->controlCenterReplica) {
            $res['ControlCenterReplica'] = $this->controlCenterReplica;
        }
        if (null !== $this->controlCenterStorage) {
            $res['ControlCenterStorage'] = $this->controlCenterStorage;
        }
        if (null !== $this->kafkaCU) {
            $res['KafkaCU'] = $this->kafkaCU;
        }
        if (null !== $this->kafkaReplica) {
            $res['KafkaReplica'] = $this->kafkaReplica;
        }
        if (null !== $this->kafkaRestProxyCU) {
            $res['KafkaRestProxyCU'] = $this->kafkaRestProxyCU;
        }
        if (null !== $this->kafkaRestProxyReplica) {
            $res['KafkaRestProxyReplica'] = $this->kafkaRestProxyReplica;
        }
        if (null !== $this->kafkaStorage) {
            $res['KafkaStorage'] = $this->kafkaStorage;
        }
        if (null !== $this->ksqlCU) {
            $res['KsqlCU'] = $this->ksqlCU;
        }
        if (null !== $this->ksqlReplica) {
            $res['KsqlReplica'] = $this->ksqlReplica;
        }
        if (null !== $this->ksqlStorage) {
            $res['KsqlStorage'] = $this->ksqlStorage;
        }
        if (null !== $this->schemaRegistryCU) {
            $res['SchemaRegistryCU'] = $this->schemaRegistryCU;
        }
        if (null !== $this->schemaRegistryReplica) {
            $res['SchemaRegistryReplica'] = $this->schemaRegistryReplica;
        }
        if (null !== $this->zooKeeperCU) {
            $res['ZooKeeperCU'] = $this->zooKeeperCU;
        }
        if (null !== $this->zooKeeperReplica) {
            $res['ZooKeeperReplica'] = $this->zooKeeperReplica;
        }
        if (null !== $this->zooKeeperStorage) {
            $res['ZooKeeperStorage'] = $this->zooKeeperStorage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return confluentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectCU'])) {
            $model->connectCU = $map['ConnectCU'];
        }
        if (isset($map['ConnectReplica'])) {
            $model->connectReplica = $map['ConnectReplica'];
        }
        if (isset($map['ControlCenterCU'])) {
            $model->controlCenterCU = $map['ControlCenterCU'];
        }
        if (isset($map['ControlCenterReplica'])) {
            $model->controlCenterReplica = $map['ControlCenterReplica'];
        }
        if (isset($map['ControlCenterStorage'])) {
            $model->controlCenterStorage = $map['ControlCenterStorage'];
        }
        if (isset($map['KafkaCU'])) {
            $model->kafkaCU = $map['KafkaCU'];
        }
        if (isset($map['KafkaReplica'])) {
            $model->kafkaReplica = $map['KafkaReplica'];
        }
        if (isset($map['KafkaRestProxyCU'])) {
            $model->kafkaRestProxyCU = $map['KafkaRestProxyCU'];
        }
        if (isset($map['KafkaRestProxyReplica'])) {
            $model->kafkaRestProxyReplica = $map['KafkaRestProxyReplica'];
        }
        if (isset($map['KafkaStorage'])) {
            $model->kafkaStorage = $map['KafkaStorage'];
        }
        if (isset($map['KsqlCU'])) {
            $model->ksqlCU = $map['KsqlCU'];
        }
        if (isset($map['KsqlReplica'])) {
            $model->ksqlReplica = $map['KsqlReplica'];
        }
        if (isset($map['KsqlStorage'])) {
            $model->ksqlStorage = $map['KsqlStorage'];
        }
        if (isset($map['SchemaRegistryCU'])) {
            $model->schemaRegistryCU = $map['SchemaRegistryCU'];
        }
        if (isset($map['SchemaRegistryReplica'])) {
            $model->schemaRegistryReplica = $map['SchemaRegistryReplica'];
        }
        if (isset($map['ZooKeeperCU'])) {
            $model->zooKeeperCU = $map['ZooKeeperCU'];
        }
        if (isset($map['ZooKeeperReplica'])) {
            $model->zooKeeperReplica = $map['ZooKeeperReplica'];
        }
        if (isset($map['ZooKeeperStorage'])) {
            $model->zooKeeperStorage = $map['ZooKeeperStorage'];
        }

        return $model;
    }
}
