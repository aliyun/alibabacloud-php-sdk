<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputRequest;

use AlibabaCloud\Dara\Model;

class inputSettings extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowOutputName;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'flowId' => 'FlowId',
        'flowOutputName' => 'FlowOutputName',
        'sourceUrl' => 'SourceUrl',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowOutputName) {
            $res['FlowOutputName'] = $this->flowOutputName;
        }

        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowOutputName'])) {
            $model->flowOutputName = $map['FlowOutputName'];
        }

        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
