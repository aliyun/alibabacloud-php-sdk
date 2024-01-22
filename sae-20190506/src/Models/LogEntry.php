<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class LogEntry extends Model
{
    /**
     * @var string
     */
    public $instanceID;

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
     * @var string
     */
    public $qualifier;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $versionID;
    protected $_name = [
        'instanceID' => 'instanceID',
        'message'    => 'message',
        'offset'     => 'offset',
        'packID'     => 'packID',
        'packMeta'   => 'packMeta',
        'qualifier'  => 'qualifier',
        'timestamp'  => 'timestamp',
        'versionID'  => 'versionID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
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
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
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
     * @return LogEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
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
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
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
