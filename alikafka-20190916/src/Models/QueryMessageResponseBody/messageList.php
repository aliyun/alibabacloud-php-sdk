<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageResponseBody;

use AlibabaCloud\Tea\Model;

class messageList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $checksum;

    /**
     * @example this is key
     *
     * @var string
     */
    public $key;

    /**
     * @example false
     *
     * @var bool
     */
    public $keyTruncated;

    /**
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @example 0
     *
     * @var int
     */
    public $partition;

    /**
     * @example 11
     *
     * @var int
     */
    public $serializedKeySize;

    /**
     * @example 20
     *
     * @var int
     */
    public $serializedValueSize;

    /**
     * @example 1705482172640
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $timestampType;

    /**
     * @example dqc_test2
     *
     * @var string
     */
    public $topic;

    /**
     * @example 0
     *
     * @var int
     */
    public $truncatedKeySize;

    /**
     * @example 0
     *
     * @var int
     */
    public $truncatedValueSize;

    /**
     * @example Welcome to Ali kafka
     *
     * @var string
     */
    public $value;

    /**
     * @example false
     *
     * @var bool
     */
    public $valueTruncated;
    protected $_name = [
        'checksum'            => 'Checksum',
        'key'                 => 'Key',
        'keyTruncated'        => 'KeyTruncated',
        'offset'              => 'Offset',
        'partition'           => 'Partition',
        'serializedKeySize'   => 'SerializedKeySize',
        'serializedValueSize' => 'SerializedValueSize',
        'timestamp'           => 'Timestamp',
        'timestampType'       => 'TimestampType',
        'topic'               => 'Topic',
        'truncatedKeySize'    => 'TruncatedKeySize',
        'truncatedValueSize'  => 'TruncatedValueSize',
        'value'               => 'Value',
        'valueTruncated'      => 'ValueTruncated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyTruncated) {
            $res['KeyTruncated'] = $this->keyTruncated;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->serializedKeySize) {
            $res['SerializedKeySize'] = $this->serializedKeySize;
        }
        if (null !== $this->serializedValueSize) {
            $res['SerializedValueSize'] = $this->serializedValueSize;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->timestampType) {
            $res['TimestampType'] = $this->timestampType;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->truncatedKeySize) {
            $res['TruncatedKeySize'] = $this->truncatedKeySize;
        }
        if (null !== $this->truncatedValueSize) {
            $res['TruncatedValueSize'] = $this->truncatedValueSize;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueTruncated) {
            $res['ValueTruncated'] = $this->valueTruncated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyTruncated'])) {
            $model->keyTruncated = $map['KeyTruncated'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['SerializedKeySize'])) {
            $model->serializedKeySize = $map['SerializedKeySize'];
        }
        if (isset($map['SerializedValueSize'])) {
            $model->serializedValueSize = $map['SerializedValueSize'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TimestampType'])) {
            $model->timestampType = $map['TimestampType'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TruncatedKeySize'])) {
            $model->truncatedKeySize = $map['TruncatedKeySize'];
        }
        if (isset($map['TruncatedValueSize'])) {
            $model->truncatedValueSize = $map['TruncatedValueSize'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueTruncated'])) {
            $model->valueTruncated = $map['ValueTruncated'];
        }

        return $model;
    }
}
