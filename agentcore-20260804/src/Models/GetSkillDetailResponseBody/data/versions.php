<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSkillDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $commitMsg;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $downloadCount;

    /**
     * @var string
     */
    public $publishPipelineInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'author' => 'author',
        'commitMsg' => 'commitMsg',
        'createTime' => 'createTime',
        'description' => 'description',
        'downloadCount' => 'downloadCount',
        'publishPipelineInfo' => 'publishPipelineInfo',
        'status' => 'status',
        'updateTime' => 'updateTime',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }

        if (null !== $this->commitMsg) {
            $res['commitMsg'] = $this->commitMsg;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->downloadCount) {
            $res['downloadCount'] = $this->downloadCount;
        }

        if (null !== $this->publishPipelineInfo) {
            $res['publishPipelineInfo'] = $this->publishPipelineInfo;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['author'])) {
            $model->author = $map['author'];
        }

        if (isset($map['commitMsg'])) {
            $model->commitMsg = $map['commitMsg'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['downloadCount'])) {
            $model->downloadCount = $map['downloadCount'];
        }

        if (isset($map['publishPipelineInfo'])) {
            $model->publishPipelineInfo = $map['publishPipelineInfo'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
