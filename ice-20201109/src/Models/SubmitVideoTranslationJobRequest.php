<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitVideoTranslationJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @example {"SourceLanguage":"zh","TargetLanguage":"en","DetextArea":"Auto"}
     *
     * @var string
     */
    public $editingConfig;

    /**
     * @example {"Type":"Video","Media":"https://your-bucket.oss-cn-shanghai.aliyuncs.com/xxx.mp4"}
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @example {"MediaURL": "https://your-bucket.oss-cn-shanghai.aliyuncs.com/your-object.mp4"}
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'description'   => 'Description',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'OutputConfig',
        'title'         => 'Title',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitVideoTranslationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
