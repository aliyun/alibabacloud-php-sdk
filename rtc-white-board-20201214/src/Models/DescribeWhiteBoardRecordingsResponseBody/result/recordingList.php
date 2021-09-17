<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeWhiteBoardRecordingsResponseBody\result;

use AlibabaCloud\Tea\Model;

class recordingList extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 文档唯一标识符
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

    /**
     * @description 创建录制的用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 白板录制操作列表
     *
     * @var string[]
     */
    public $operateList;
    protected $_name = [
        'appID'       => 'AppID',
        'docKey'      => 'DocKey',
        'recordId'    => 'RecordId',
        'userId'      => 'UserId',
        'operateList' => 'OperateList',
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
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->operateList) {
            $res['OperateList'] = $this->operateList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['OperateList'])) {
            if (!empty($map['OperateList'])) {
                $model->operateList = $map['OperateList'];
            }
        }

        return $model;
    }
}
