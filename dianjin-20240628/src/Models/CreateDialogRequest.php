<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class CreateDialogRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example taobao
     *
     * @var string
     */
    public $channel;

    /**
     * @var bool
     */
    public $enableLibrary;

    /**
     * @example null
     *
     * @var mixed[]
     */
    public $metaData;

    /**
     * @description This parameter is required.
     *
     * @example live_broadcast_qa
     *
     * @var string
     */
    public $playCode;

    /**
     * @var string[]
     */
    public $qaLibraryList;

    /**
     * @description This parameter is required.
     *
     * @example ebf83826-dc1c-46f8-9759-0fb6da4c8xxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $selfDirected;
    protected $_name = [
        'channel'       => 'channel',
        'enableLibrary' => 'enableLibrary',
        'metaData'      => 'metaData',
        'playCode'      => 'playCode',
        'qaLibraryList' => 'qaLibraryList',
        'requestId'     => 'requestId',
        'selfDirected'  => 'selfDirected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->enableLibrary) {
            $res['enableLibrary'] = $this->enableLibrary;
        }
        if (null !== $this->metaData) {
            $res['metaData'] = $this->metaData;
        }
        if (null !== $this->playCode) {
            $res['playCode'] = $this->playCode;
        }
        if (null !== $this->qaLibraryList) {
            $res['qaLibraryList'] = $this->qaLibraryList;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->selfDirected) {
            $res['selfDirected'] = $this->selfDirected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDialogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['enableLibrary'])) {
            $model->enableLibrary = $map['enableLibrary'];
        }
        if (isset($map['metaData'])) {
            $model->metaData = $map['metaData'];
        }
        if (isset($map['playCode'])) {
            $model->playCode = $map['playCode'];
        }
        if (isset($map['qaLibraryList'])) {
            if (!empty($map['qaLibraryList'])) {
                $model->qaLibraryList = $map['qaLibraryList'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['selfDirected'])) {
            $model->selfDirected = $map['selfDirected'];
        }

        return $model;
    }
}
