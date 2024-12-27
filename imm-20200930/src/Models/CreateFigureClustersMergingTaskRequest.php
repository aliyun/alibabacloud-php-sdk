<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateFigureClustersMergingTaskRequest extends Model
{
    /**
     * @description The name of the dataset. For more information, see [Create a dataset](https://help.aliyun.com/document_detail/478160.html).
     *
     * This parameter is required.
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The ID of the source group. You must specify either From or Froms, but not both.
     *
     * @example Cluster-2ab85905-23ba-4632-b2d8-1c21cfe****
     *
     * @var string
     */
    public $from;

    /**
     * @description The IDs of source clustering groups. You must specify either From or Froms, but not both. You can specify up to 100 task IDs.
     *
     * @var string[]
     */
    public $froms;

    /**
     * @description The notification message configurations. For more information, see the "Metadata indexing" section of the [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html) topic.
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The custom tags, which can be used to search for and filter asynchronous tasks.
     *
     * @example {"key":"val"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The ID of the destination clustering group.
     *
     * This parameter is required.
     * @example Cluster-4a3a71c1-c092-4788-8826-2f65d17****
     *
     * @var string
     */
    public $to;

    /**
     * @description The custom data, which is returned in an asynchronous notification and facilitates notification management. The maximum length is 2,048 bytes.
     *
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName'  => 'DatasetName',
        'from'         => 'From',
        'froms'        => 'Froms',
        'notification' => 'Notification',
        'projectName'  => 'ProjectName',
        'tags'         => 'Tags',
        'to'           => 'To',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->froms) {
            $res['Froms'] = $this->froms;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFigureClustersMergingTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Froms'])) {
            if (!empty($map['Froms'])) {
                $model->froms = $map['Froms'];
            }
        }
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
