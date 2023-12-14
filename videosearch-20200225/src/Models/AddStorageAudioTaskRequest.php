<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class AddStorageAudioTaskRequest extends Model
{
    /**
     * @example http://xxx
     *
     * @var string
     */
    public $audioFile;

    /**
     * @example 1
     *
     * @var string
     */
    public $audioId;

    /**
     * @example test
     *
     * @var string
     */
    public $audioTags;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $audioUrl;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example 1
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1
     *
     * @var int
     */
    public $contentSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $sort;
    protected $_name = [
        'audioFile'     => 'AudioFile',
        'audioId'       => 'AudioId',
        'audioTags'     => 'AudioTags',
        'audioUrl'      => 'AudioUrl',
        'callbackUrl'   => 'CallbackUrl',
        'clientToken'   => 'ClientToken',
        'contentSource' => 'ContentSource',
        'description'   => 'Description',
        'instanceId'    => 'InstanceId',
        'sort'          => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFile) {
            $res['AudioFile'] = $this->audioFile;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->audioTags) {
            $res['AudioTags'] = $this->audioTags;
        }
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->contentSource) {
            $res['ContentSource'] = $this->contentSource;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddStorageAudioTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFile'])) {
            $model->audioFile = $map['AudioFile'];
        }
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['AudioTags'])) {
            $model->audioTags = $map['AudioTags'];
        }
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ContentSource'])) {
            $model->contentSource = $map['ContentSource'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
