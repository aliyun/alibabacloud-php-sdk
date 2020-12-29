<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateDocTranslateTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'fileUrlObject'  => 'FileUrlObject',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
        'scene'          => 'Scene',
        'callbackUrl'    => 'CallbackUrl',
        'clientToken'    => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('fileUrlObject', $this->fileUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrlObject) {
            $res['FileUrlObject'] = $this->fileUrlObject;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDocTranslateTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrlObject'])) {
            $model->fileUrlObject = $map['FileUrlObject'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
