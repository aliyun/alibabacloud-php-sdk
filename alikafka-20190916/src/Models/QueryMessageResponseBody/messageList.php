<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageResponseBody;

use AlibabaCloud\Tea\Model;

class messageList extends Model
{
    /**
     * @description The check value of the chaincode.
     *
     * @example 0
     *
     * @var int
     */
    public $checksum;

    /**
     * @description The message key.
     *
     * @example this is key
     *
     * @var string
     */
    public $key;

    /**
     * @description Indicates whether the key is truncated.
     *
     * @example false
     *
     * @var bool
     */
    public $keyTruncated;

    /**
     * @description The consumer offset of the partition.
     *
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @description The partition ID.
     *
     * @example 0
     *
     * @var int
     */
    public $partition;

    /**
     * @description The size of the key after serialization. Unit: bytes.
     *
     * @example 11
     *
     * @var int
     */
    public $serializedKeySize;

    /**
     * @description The size of the value after serialization. Unit: bytes.
     *
     * @example 20
     *
     * @var int
     */
    public $serializedValueSize;

    /**
     * @description The time when the message was created. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1705482172640
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The time type.
     *
     * @example CreateTime
     *
     * @var string
     */
    public $timestampType;

    /**
     * @description The topic name.
     *
     * @example dqc_test2
     *
     * @var string
     */
    public $topic;

    /**
     * @description The truncated size of the message key. Unit: bytes.
     *
     *   A message is truncated only if the message exceeds 10 MB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $truncatedKeySize;

    /**
     * @description The truncated size of the message value. Unit: bytes.
     *
     *   A message is truncated only if the message exceeds 10 MB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $truncatedValueSize;

    /**
     * @description The message value.
     *
     * @example Welcome to Ali kafka
     *
     * @var string
     */
    public $value;

    /**
     * @description Indicates whether the value is truncated.
     *
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
