<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class PauseWhiteBoardRecordingRequest extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 结束白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成
     *
     * @var string
     */
    public $userId;

    /**
     * @description 白板文档唯一标识符
     *
     * @var string
     */
    public $docKey;

    /**
     * @description 白板录制Session的唯一标识
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'appID'    => 'AppID',
        'userId'   => 'UserId',
        'docKey'   => 'DocKey',
        'recordId' => 'RecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PauseWhiteBoardRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
