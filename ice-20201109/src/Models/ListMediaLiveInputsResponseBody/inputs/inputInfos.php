<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsResponseBody\inputs;

use AlibabaCloud\Tea\Model;

class inputInfos extends Model
{
    /**
     * @description The endpoint that the stream is pushed to. This parameter is returned for PUSH inputs.
     *
     * @example rtmp://domain/app/stream
     *
     * @var string
     */
    public $destHost;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowOutputName;

    /**
     * @description The URL for input monitoring.
     *
     * @example rtmp://domain/app/stream_for_monitor
     *
     * @var string
     */
    public $monitorUrl;

    /**
     * @description The source URL where the stream is pulled from. This parameter is returned for PULL inputs.
     *
     * @example rtmp://domain/app/stream
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @description The name of the pushed stream. This parameter is returned for PUSH inputs.
     *
     * @example mystream
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'destHost'       => 'DestHost',
        'flowId'         => 'FlowId',
        'flowOutputName' => 'FlowOutputName',
        'monitorUrl'     => 'MonitorUrl',
        'sourceUrl'      => 'SourceUrl',
        'streamName'     => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destHost) {
            $res['DestHost'] = $this->destHost;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowOutputName) {
            $res['FlowOutputName'] = $this->flowOutputName;
        }
        if (null !== $this->monitorUrl) {
            $res['MonitorUrl'] = $this->monitorUrl;
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
     * @return inputInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestHost'])) {
            $model->destHost = $map['DestHost'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowOutputName'])) {
            $model->flowOutputName = $map['FlowOutputName'];
        }
        if (isset($map['MonitorUrl'])) {
            $model->monitorUrl = $map['MonitorUrl'];
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
