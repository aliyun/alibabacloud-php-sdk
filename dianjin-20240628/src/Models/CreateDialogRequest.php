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
     * @description This parameter is required.
     *
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
    protected $_name = [
        'channel'       => 'channel',
        'metaData'      => 'metaData',
        'playCode'      => 'playCode',
        'qaLibraryList' => 'qaLibraryList',
        'requestId'     => 'requestId',
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

        return $model;
    }
}
