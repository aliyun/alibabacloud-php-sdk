<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class TranslateImageBatchRequest extends Model
{
    /**
     * @example my_awesome_task_1
     *
     * @var string
     */
    public $customTaskId;

    /**
     * @example {"needEditorData": "false", "ignoreEntityRecognize": "true"}
     *
     * @var string
     */
    public $ext;

    /**
     * @example general
     *
     * @var string
     */
    public $field;

    /**
     * @description This parameter is required.
     *
     * @example https://example.com/1.jpg,https://example.com/2.jpg,https://example.com/3.jpg
     *
     * @var string
     */
    public $imageUrls;

    /**
     * @description This parameter is required.
     *
     * @example zh
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @description This parameter is required.
     *
     * @example en
     *
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'customTaskId'   => 'CustomTaskId',
        'ext'            => 'Ext',
        'field'          => 'Field',
        'imageUrls'      => 'ImageUrls',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTaskId) {
            $res['CustomTaskId'] = $this->customTaskId;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TranslateImageBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTaskId'])) {
            $model->customTaskId = $map['CustomTaskId'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['ImageUrls'])) {
            $model->imageUrls = $map['ImageUrls'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        return $model;
    }
}
