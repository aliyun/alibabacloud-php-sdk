<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $algorithm;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var int
     */
    public $flag;

    /**
     * @var int
     */
    public $keyTag;

    /**
     * @var int
     */
    public $matchingType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $selector;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $usage;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certificate' => 'Certificate',
        'fingerprint' => 'Fingerprint',
        'flag' => 'Flag',
        'keyTag' => 'KeyTag',
        'matchingType' => 'MatchingType',
        'port' => 'Port',
        'priority' => 'Priority',
        'selector' => 'Selector',
        'tag' => 'Tag',
        'type' => 'Type',
        'usage' => 'Usage',
        'value' => 'Value',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
