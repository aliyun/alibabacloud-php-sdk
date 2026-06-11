<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillDetailResponseBody\data;

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
        'author' => 'Author',
        'commitMsg' => 'CommitMsg',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'downloadCount' => 'DownloadCount',
        'publishPipelineInfo' => 'PublishPipelineInfo',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }

        if (null !== $this->commitMsg) {
            $res['CommitMsg'] = $this->commitMsg;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadCount) {
            $res['DownloadCount'] = $this->downloadCount;
        }

        if (null !== $this->publishPipelineInfo) {
            $res['PublishPipelineInfo'] = $this->publishPipelineInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }

        if (isset($map['CommitMsg'])) {
            $model->commitMsg = $map['CommitMsg'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadCount'])) {
            $model->downloadCount = $map['DownloadCount'];
        }

        if (isset($map['PublishPipelineInfo'])) {
            $model->publishPipelineInfo = $map['PublishPipelineInfo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
