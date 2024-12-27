<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateStoryShrinkRequest extends Model
{
    /**
     * @description The address of the story. IMM filters candidate photos to generate a story based on the value of this parameter. This parameter takes effect only if you set StoryType to TravelMemory.
     *
     * >  If you are located in Hong Kong (China), Macao (China), Taiwan (China), or overseas, you cannot specify an address in the Chinese mainland by using this parameter.
     * @var string
     */
    public $addressShrink;

    /**
     * @description The custom ID. A custom ID of a generated story may differ from the value of ObjectID and can be utilized for subsequent retrieval and sorting of stories.
     *
     * @example test
     *
     * @var string
     */
    public $customId;

    /**
     * @description The custom labels. Labels specify the custom information of the story. This enables retrieval based on your business requirements.
     *
     * @example {"Bucket": "examplebucket"}
     *
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @description The name of the dataset. For information about how to obtain the name of a dataset, see [Create a dataset](https://help.aliyun.com/document_detail/478160.html).
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The maximum number of photo files in the story. The actual number of photo files ranges from the value of MinFileCount to the value of MaxFileCount. The value of this parameter must be an integer greater than the value of MinFileCount. To provide the desired effect, the algorithm limits the maximum number of photo files to 1,500. If you set MaxFileCount to a value greater than 1,500, this parameter does not take effect.
     *
     * @example 3
     *
     * @var int
     */
    public $maxFileCount;

    /**
     * @description The minimum number of photo files in the story. The actual number of photo files ranges from the value of MinFileCount to the value of MaxFileCount. The value of this parameter must be an integer greater than 1. If the actual number of candidate photos is less than the value of this parameter, a null story is returned.
     *
     * @example 1
     *
     * @var int
     */
    public $minFileCount;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var string
     */
    public $notificationShrink;

    /**
     * @description The topic name of the asynchronous reverse notification.
     *
     * @example test-topic
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @description The ID of the story. This parameter is optional. If you leave this parameter empty, IMM assigns a unique identifier to the story. You can query and update a story based on its ID. You can also manually create an ID for a story. After you create an ID for a story, you must specify this parameter to pass the ID into the system. This way, IMM can record the ID as the unique identifier of the story. If you pass an existing ID into the system, IMM updates the story that corresponds to the ID.
     *
     * @example id1
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The end time of the photo collection for which you want to create the story. StoryStartTime and StoryEndTime form a time interval based on which IMM filters candidate photos to generate a story. The value must be a string in the RFC3339 format.
     *
     * @example 2021-12-30T16:00:00Z
     *
     * @var string
     */
    public $storyEndTime;

    /**
     * @description The name of the story.
     *
     * @example name1
     *
     * @var string
     */
    public $storyName;

    /**
     * @description The start time of the photo collection for which you want to create the story. StoryStartTime and StoryEndTime form a time interval based on which IMM filters candidate photos to generate a story. The value must be a string in the RFC3339 format.
     *
     * @example 2016-12-30T16:00:00Z
     *
     * @var string
     */
    public $storyStartTime;

    /**
     * @description The subtype of the story. For information about valid subtypes, see [Story types and subtypes](https://help.aliyun.com/document_detail/2743998.html).
     *
     * @example Solo
     *
     * @var string
     */
    public $storySubType;

    /**
     * @description The type of the story. For information about valid types, see [Story types and subtypes](https://help.aliyun.com/document_detail/2743998.html).
     *
     * This parameter is required.
     * @example PeopleMemory
     *
     * @var string
     */
    public $storyType;

    /**
     * @description The tags. You can specify this parameter in one of the following scenarios:
     *
     *   Specify tags as custom data, which is returned in messages provided by Simple Message Queue.
     *   Search for tasks by tag.
     *   Specify tags as variables in destination URIs.
     *
     * @example {"key":"val"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The custom information, which is returned as asynchronous notifications to facilitate notification management in your system. The maximum information length is 2,048 bytes.
     *
     * @example {"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'addressShrink'      => 'Address',
        'customId'           => 'CustomId',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName'        => 'DatasetName',
        'maxFileCount'       => 'MaxFileCount',
        'minFileCount'       => 'MinFileCount',
        'notificationShrink' => 'Notification',
        'notifyTopicName'    => 'NotifyTopicName',
        'objectId'           => 'ObjectId',
        'projectName'        => 'ProjectName',
        'storyEndTime'       => 'StoryEndTime',
        'storyName'          => 'StoryName',
        'storyStartTime'     => 'StoryStartTime',
        'storySubType'       => 'StorySubType',
        'storyType'          => 'StoryType',
        'tagsShrink'         => 'Tags',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressShrink) {
            $res['Address'] = $this->addressShrink;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabelsShrink) {
            $res['CustomLabels'] = $this->customLabelsShrink;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->maxFileCount) {
            $res['MaxFileCount'] = $this->maxFileCount;
        }
        if (null !== $this->minFileCount) {
            $res['MinFileCount'] = $this->minFileCount;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyEndTime) {
            $res['StoryEndTime'] = $this->storyEndTime;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }
        if (null !== $this->storyStartTime) {
            $res['StoryStartTime'] = $this->storyStartTime;
        }
        if (null !== $this->storySubType) {
            $res['StorySubType'] = $this->storySubType;
        }
        if (null !== $this->storyType) {
            $res['StoryType'] = $this->storyType;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStoryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->addressShrink = $map['Address'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabelsShrink = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['MaxFileCount'])) {
            $model->maxFileCount = $map['MaxFileCount'];
        }
        if (isset($map['MinFileCount'])) {
            $model->minFileCount = $map['MinFileCount'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryEndTime'])) {
            $model->storyEndTime = $map['StoryEndTime'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }
        if (isset($map['StoryStartTime'])) {
            $model->storyStartTime = $map['StoryStartTime'];
        }
        if (isset($map['StorySubType'])) {
            $model->storySubType = $map['StorySubType'];
        }
        if (isset($map['StoryType'])) {
            $model->storyType = $map['StoryType'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
