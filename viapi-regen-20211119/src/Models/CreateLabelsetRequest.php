<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class CreateLabelsetRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $tagSettings;

    /**
     * @var string
     */
    public $tagUserList;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userOssUrl;
    protected $_name = [
        'datasetId'   => 'DatasetId',
        'description' => 'Description',
        'name'        => 'Name',
        'objectKey'   => 'ObjectKey',
        'tagSettings' => 'TagSettings',
        'tagUserList' => 'TagUserList',
        'type'        => 'Type',
        'userOssUrl'  => 'UserOssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->tagSettings) {
            $res['TagSettings'] = $this->tagSettings;
        }
        if (null !== $this->tagUserList) {
            $res['TagUserList'] = $this->tagUserList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userOssUrl) {
            $res['UserOssUrl'] = $this->userOssUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLabelsetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['TagSettings'])) {
            $model->tagSettings = $map['TagSettings'];
        }
        if (isset($map['TagUserList'])) {
            $model->tagUserList = $map['TagUserList'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserOssUrl'])) {
            $model->userOssUrl = $map['UserOssUrl'];
        }

        return $model;
    }
}
