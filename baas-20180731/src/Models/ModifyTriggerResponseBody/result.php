<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\ModifyTriggerResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\ModifyTriggerResponseBody\result\checkpoint;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var checkpoint
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'channelId'    => 'ChannelId',
        'channelName'  => 'ChannelName',
        'checkpoint'   => 'Checkpoint',
        'createTime'   => 'CreateTime',
        'errorMessage' => 'ErrorMessage',
        'name'         => 'Name',
        'options'      => 'Options',
        'source'       => 'Source',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = null !== $this->checkpoint ? $this->checkpoint->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = checkpoint::fromMap($map['Checkpoint']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
