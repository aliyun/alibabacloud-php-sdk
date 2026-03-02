<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryListResponseBody\data;

use AlibabaCloud\Dara\Model;

class memoryNodes extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $memoryNodeId;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $metaDataJson;

    /**
     * @var string
     */
    public $oldContent;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'event' => 'Event',
        'memoryNodeId' => 'MemoryNodeId',
        'metaData' => 'MetaData',
        'metaDataJson' => 'MetaDataJson',
        'oldContent' => 'OldContent',
        'projectId' => 'ProjectId',
        'timestamp' => 'Timestamp',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->memoryNodeId) {
            $res['MemoryNodeId'] = $this->memoryNodeId;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['MetaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['MetaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metaDataJson) {
            $res['MetaDataJson'] = $this->metaDataJson;
        }

        if (null !== $this->oldContent) {
            $res['OldContent'] = $this->oldContent;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['MemoryNodeId'])) {
            $model->memoryNodeId = $map['MemoryNodeId'];
        }

        if (isset($map['MetaData'])) {
            if (!empty($map['MetaData'])) {
                $model->metaData = [];
                foreach ($map['MetaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['MetaDataJson'])) {
            $model->metaDataJson = $map['MetaDataJson'];
        }

        if (isset($map['OldContent'])) {
            $model->oldContent = $map['OldContent'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
