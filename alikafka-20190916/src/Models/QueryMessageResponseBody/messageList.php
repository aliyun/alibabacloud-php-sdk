<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\QueryMessageResponseBody;

use AlibabaCloud\Dara\Model;

class messageList extends Model
{
    /**
     * @var int
     */
    public $checksum;

    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $keyTruncated;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var int
     */
    public $serializedKeySize;

    /**
     * @var int
     */
    public $serializedValueSize;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $timestampType;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $truncatedKeySize;

    /**
     * @var int
     */
    public $truncatedValueSize;

    /**
     * @var string
     */
    public $value;

    /**
     * @var bool
     */
    public $valueTruncated;
    protected $_name = [
        'checksum' => 'Checksum',
        'key' => 'Key',
        'keyTruncated' => 'KeyTruncated',
        'offset' => 'Offset',
        'partition' => 'Partition',
        'serializedKeySize' => 'SerializedKeySize',
        'serializedValueSize' => 'SerializedValueSize',
        'timestamp' => 'Timestamp',
        'timestampType' => 'TimestampType',
        'topic' => 'Topic',
        'truncatedKeySize' => 'TruncatedKeySize',
        'truncatedValueSize' => 'TruncatedValueSize',
        'value' => 'Value',
        'valueTruncated' => 'ValueTruncated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
