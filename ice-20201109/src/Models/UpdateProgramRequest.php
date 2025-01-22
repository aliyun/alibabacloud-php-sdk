<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateProgramRequest extends Model
{
    /**
     * @var string
     */
    public $adBreaks;
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $clipRange;
    /**
     * @var string
     */
    public $programName;
    /**
     * @var string
     */
    public $sourceLocationName;
    /**
     * @var string
     */
    public $sourceName;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var string
     */
    public $transition;
    protected $_name = [
        'adBreaks'           => 'AdBreaks',
        'channelName'        => 'ChannelName',
        'clipRange'          => 'ClipRange',
        'programName'        => 'ProgramName',
        'sourceLocationName' => 'SourceLocationName',
        'sourceName'         => 'SourceName',
        'sourceType'         => 'SourceType',
        'transition'         => 'Transition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
