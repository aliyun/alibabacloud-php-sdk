<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ChannelAssemblyProgram\adBreaks;

class ChannelAssemblyProgram extends Model
{
    /**
     * @var adBreaks[]
     */
    public $adBreaks;
    /**
     * @var string
     */
    public $arn;
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
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
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
        'arn'                => 'Arn',
        'channelName'        => 'ChannelName',
        'clipRange'          => 'ClipRange',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'programName'        => 'ProgramName',
        'sourceLocationName' => 'SourceLocationName',
        'sourceName'         => 'SourceName',
        'sourceType'         => 'SourceType',
        'transition'         => 'Transition',
    ];

    public function validate()
    {
        if (\is_array($this->adBreaks)) {
            Model::validateArray($this->adBreaks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adBreaks) {
            if (\is_array($this->adBreaks)) {
                $res['AdBreaks'] = [];
                $n1              = 0;
                foreach ($this->adBreaks as $item1) {
                    $res['AdBreaks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->clipRange) {
            $res['ClipRange'] = $this->clipRange;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
            if (!empty($map['AdBreaks'])) {
                $model->adBreaks = [];
                $n1              = 0;
                foreach ($map['AdBreaks'] as $item1) {
                    $model->adBreaks[$n1++] = adBreaks::fromMap($item1);
                }
            }
        }

        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['ClipRange'])) {
            $model->clipRange = $map['ClipRange'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
