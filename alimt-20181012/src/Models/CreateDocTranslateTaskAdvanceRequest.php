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
    public $callbackUrl;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'fileUrlObject'  => 'FileUrlObject',
        'callbackUrl'    => 'CallbackUrl',
        'clientToken'    => 'ClientToken',
        'scene'          => 'Scene',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
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
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
     * @return CreateDocTranslateTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrlObject'])) {
            $model->fileUrlObject = $map['FileUrlObject'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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
