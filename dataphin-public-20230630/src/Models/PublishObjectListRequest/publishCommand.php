<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishObjectListRequest;

use AlibabaCloud\Tea\Model;

class publishCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 发布
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example 1234567
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $submitIdList;
    protected $_name = [
        'comment'      => 'Comment',
        'projectId'    => 'ProjectId',
        'submitIdList' => 'SubmitIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->submitIdList) {
            $res['SubmitIdList'] = $this->submitIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SubmitIdList'])) {
            if (!empty($map['SubmitIdList'])) {
                $model->submitIdList = $map['SubmitIdList'];
            }
        }

        return $model;
    }
}
