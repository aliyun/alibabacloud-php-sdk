<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetTransportLayerApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $clientIPPassThroughMode;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $edgePort;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'clientIPPassThroughMode' => 'ClientIPPassThroughMode',
        'comment' => 'Comment',
        'edgePort' => 'EdgePort',
        'protocol' => 'Protocol',
        'ruleId' => 'RuleId',
        'source' => 'Source',
        'sourcePort' => 'SourcePort',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIPPassThroughMode) {
            $res['ClientIPPassThroughMode'] = $this->clientIPPassThroughMode;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->edgePort) {
            $res['EdgePort'] = $this->edgePort;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['ClientIPPassThroughMode'])) {
            $model->clientIPPassThroughMode = $map['ClientIPPassThroughMode'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['EdgePort'])) {
            $model->edgePort = $map['EdgePort'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
