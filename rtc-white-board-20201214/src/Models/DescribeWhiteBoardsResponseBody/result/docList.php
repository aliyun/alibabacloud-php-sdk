<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeWhiteBoardsResponseBody\result;

use AlibabaCloud\Tea\Model;

class docList extends Model
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
     * @description 文档状态（取值：1:启用，2:停用）
     *
     * @var int
     */
    public $status;

    /**
     * @description 创建白板的用户ID
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description 白板应用创建时间
     *
     * @var string
     */
    public $createTime;
    protected $_name = [
        'appID'        => 'AppID',
        'docKey'       => 'DocKey',
        'status'       => 'Status',
        'createUserId' => 'CreateUserId',
        'createTime'   => 'CreateTime',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docList
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
