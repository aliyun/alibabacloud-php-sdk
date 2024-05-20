<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceLogsInput extends Model
{
    /**
     * @var int
     */
    public $backwardLine;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $forwardLine;

    /**
     * @var bool
     */
    public $isTail;

    /**
     * @var string
     */
    public $match;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $packID;

    /**
     * @var string
     */
    public $packMeta;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $versionID;
    protected $_name = [
        'backwardLine' => 'backwardLine',
        'endTime'      => 'endTime',
        'forwardLine'  => 'forwardLine',
        'isTail'       => 'isTail',
        'match'        => 'match',
        'message'      => 'message',
        'offset'       => 'offset',
        'packID'       => 'packID',
        'packMeta'     => 'packMeta',
        'startTime'    => 'startTime',
        'timestamp'    => 'timestamp',
        'versionID'    => 'versionID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backwardLine) {
            $res['backwardLine'] = $this->backwardLine;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->forwardLine) {
            $res['forwardLine'] = $this->forwardLine;
        }
        if (null !== $this->isTail) {
            $res['isTail'] = $this->isTail;
        }
        if (null !== $this->match) {
            $res['match'] = $this->match;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->packID) {
            $res['packID'] = $this->packID;
        }
        if (null !== $this->packMeta) {
            $res['packMeta'] = $this->packMeta;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->versionID) {
            $res['versionID'] = $this->versionID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceLogsInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backwardLine'])) {
            $model->backwardLine = $map['backwardLine'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['forwardLine'])) {
            $model->forwardLine = $map['forwardLine'];
        }
        if (isset($map['isTail'])) {
            $model->isTail = $map['isTail'];
        }
        if (isset($map['match'])) {
            $model->match = $map['match'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['packID'])) {
            $model->packID = $map['packID'];
        }
        if (isset($map['packMeta'])) {
            $model->packMeta = $map['packMeta'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['versionID'])) {
            $model->versionID = $map['versionID'];
        }

        return $model;
    }
}
