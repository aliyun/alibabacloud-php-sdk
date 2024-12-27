<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest\dateOptions;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest\locationOptions;
use AlibabaCloud\Tea\Model;

class CreateLocationDateClusteringTaskRequest extends Model
{
    /**
     * @description The name of the dataset.[](~~478160~~)
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The date configurations for clustering.
     *
     * This parameter is required.
     * @var dateOptions
     */
    public $dateOptions;

    /**
     * @description The geolocation configurations for clustering.
     *
     * This parameter is required.
     * @var locationOptions
     */
    public $locationOptions;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The custom tags. You can search for or filter asynchronous tasks by custom tag.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The custom information, which is returned in an asynchronous notification and facilitates notification management. The maximum length of the value is 2,048 bytes.
     *
     * @example test-data
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName'     => 'DatasetName',
        'dateOptions'     => 'DateOptions',
        'locationOptions' => 'LocationOptions',
        'notification'    => 'Notification',
        'projectName'     => 'ProjectName',
        'tags'            => 'Tags',
        'userData'        => 'UserData',
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
        if (null !== $this->dateOptions) {
            $res['DateOptions'] = null !== $this->dateOptions ? $this->dateOptions->toMap() : null;
        }
        if (null !== $this->locationOptions) {
            $res['LocationOptions'] = null !== $this->locationOptions ? $this->locationOptions->toMap() : null;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLocationDateClusteringTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DateOptions'])) {
            $model->dateOptions = dateOptions::fromMap($map['DateOptions']);
        }
        if (isset($map['LocationOptions'])) {
            $model->locationOptions = locationOptions::fromMap($map['LocationOptions']);
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
