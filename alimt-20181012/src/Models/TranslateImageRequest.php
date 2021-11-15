<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class TranslateImageRequest extends Model
{
    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $imageBase64;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'ext'            => 'Ext',
        'field'          => 'Field',
        'imageBase64'    => 'ImageBase64',
        'imageUrl'       => 'ImageUrl',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->imageBase64) {
            $res['ImageBase64'] = $this->imageBase64;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
     * @return TranslateImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['ImageBase64'])) {
            $model->imageBase64 = $map['ImageBase64'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
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
