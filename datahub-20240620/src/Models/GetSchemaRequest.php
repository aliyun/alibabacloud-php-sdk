<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class GetSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'projectName' => 'ProjectName',
        'topicName' => 'TopicName',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
