<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputRequest;

use AlibabaCloud\Tea\Model;

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
     * @description The source URL where the stream is pulled from. This parameter is required for PULL inputs.
     *
     * @example rtmp://domain/app/stream
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @description The name of the pushed stream. This parameter is required for PUSH inputs. It can be up to 255 characters in length.
     *
     * @example mystream
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'flowId'         => 'FlowId',
        'flowOutputName' => 'FlowOutputName',
        'sourceUrl'      => 'SourceUrl',
        'streamName'     => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return inputSettings
     */
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
