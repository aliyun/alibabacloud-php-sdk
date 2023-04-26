<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class aiRoughData extends Model
{
    /**
     * @description 视频AI分类
     *
     * @var string
     */
    public $aiCategory;

    /**
     * @description AI任务ID
     *
     * @var string
     */
    public $aiJobId;

    /**
     * @description 保存类型
     *
     * @var string
     */
    public $saveType;

    /**
     * @description 数据状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aiCategory' => 'AiCategory',
        'aiJobId'    => 'AiJobId',
        'saveType'   => 'SaveType',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiCategory) {
            $res['AiCategory'] = $this->aiCategory;
        }
        if (null !== $this->aiJobId) {
            $res['AiJobId'] = $this->aiJobId;
        }
        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiRoughData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiCategory'])) {
            $model->aiCategory = $map['AiCategory'];
        }
        if (isset($map['AiJobId'])) {
            $model->aiJobId = $map['AiJobId'];
        }
        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
