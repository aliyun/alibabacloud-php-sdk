<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\success;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $algorithm;

    /**
     * @example dGVzdGFkYWxrcw==
     *
     * @var string
     */
    public $certificate;

    /**
     * @example abcdef1234567890
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @example 128
     *
     * @var int
     */
    public $flag;

    /**
     * @example 0
     *
     * @var int
     */
    public $keyTag;

    /**
     * @example 0
     *
     * @var int
     */
    public $matchingType;

    /**
     * @example 0
     *
     * @var int
     */
    public $port;

    /**
     * @example 10
     *
     * @var int
     */
    public $priority;

    /**
     * @example 0
     *
     * @var int
     */
    public $selector;

    /**
     * @example issue
     *
     * @var string
     */
    public $tag;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example 0
     *
     * @var int
     */
    public $usage;

    /**
     * @example example.com
     *
     * @var string
     */
    public $value;

    /**
     * @example 0
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'algorithm'    => 'Algorithm',
        'certificate'  => 'Certificate',
        'fingerprint'  => 'Fingerprint',
        'flag'         => 'Flag',
        'keyTag'       => 'KeyTag',
        'matchingType' => 'MatchingType',
        'port'         => 'Port',
        'priority'     => 'Priority',
        'selector'     => 'Selector',
        'tag'          => 'Tag',
        'type'         => 'Type',
        'usage'        => 'Usage',
        'value'        => 'Value',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }
        if (null !== $this->matchingType) {
            $res['MatchingType'] = $this->matchingType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }
        if (isset($map['MatchingType'])) {
            $model->matchingType = $map['MatchingType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
