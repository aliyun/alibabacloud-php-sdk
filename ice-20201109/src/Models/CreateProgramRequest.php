<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateProgramRequest extends Model
{
    /**
     * @description The information about ad breaks.
     *
     * @example [{"MessageType":"SPLICE_INSERT","OffsetMillis":1000,"SourceLocationName":"MySourceLocation","SourceName":"MyAdSource","SpliceInsertSettings":{"AvailNumber":0,"AvailExpected":0,"SpliceEventID":1,"UniqueProgramID":0}}]
     *
     * @var string
     */
    public $adBreaks;

    /**
     * @description The name of the channel.
     *
     * This parameter is required.
     *
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description Extracts a clip from the source.
     *
     * @example {StartOffsetMillis: 213123, EndOffsetMillis: 213134}
     *
     * @var string
     */
    public $clipRange;

    /**
     * @description The name of the program.
     *
     * This parameter is required.
     *
     * @example program1
     *
     * @var string
     */
    public $programName;

    /**
     * @description The source location.
     *
     * This parameter is required.
     *
     * @example MySourceLcation
     *
     * @var string
     */
    public $sourceLocationName;

    /**
     * @description The name of the source.
     *
     * This parameter is required.
     *
     * @example MySource
     *
     * @var string
     */
    public $sourceName;

    /**
     * @description The source type of the program.
     *
     * This parameter is required.
     *
     * @example vodSource
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The program transition method.
     *
     * This parameter is required.
     *
     * @example {"Type": "RELATIVE", "RelativePosition": "AFTER_PROGRAM", "RelativeProgram": "program2"}
     *
     * @var string
     */
    public $transition;
    protected $_name = [
        'adBreaks' => 'AdBreaks',
        'channelName' => 'ChannelName',
        'clipRange' => 'ClipRange',
        'programName' => 'ProgramName',
        'sourceLocationName' => 'SourceLocationName',
        'sourceName' => 'SourceName',
        'sourceType' => 'SourceType',
        'transition' => 'Transition',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adBreaks) {
            $res['AdBreaks'] = $this->adBreaks;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->clipRange) {
            $res['ClipRange'] = $this->clipRange;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->transition) {
            $res['Transition'] = $this->transition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProgramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdBreaks'])) {
            $model->adBreaks = $map['AdBreaks'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ClipRange'])) {
            $model->clipRange = $map['ClipRange'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Transition'])) {
            $model->transition = $map['Transition'];
        }

        return $model;
    }
}
