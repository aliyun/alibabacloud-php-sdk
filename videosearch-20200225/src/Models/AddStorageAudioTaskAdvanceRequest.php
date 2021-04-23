<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddStorageAudioTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $audioFileObject;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $audioId;

    /**
     * @var string
     */
    public $audioTags;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $contentSource;

    /**
     * @var int
     */
    public $sort;
    protected $_name = [
        'audioFileObject' => 'AudioFileObject',
        'instanceId'      => 'InstanceId',
        'audioUrl'        => 'AudioUrl',
        'audioId'         => 'AudioId',
        'audioTags'       => 'AudioTags',
        'callbackUrl'     => 'CallbackUrl',
        'description'     => 'Description',
        'clientToken'     => 'ClientToken',
        'contentSource'   => 'ContentSource',
        'sort'            => 'Sort',
    ];

    public function validate()
    {
        Model::validateRequired('audioFileObject', $this->audioFileObject, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('audioId', $this->audioId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFileObject) {
            $res['AudioFileObject'] = $this->audioFileObject;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->audioTags) {
            $res['AudioTags'] = $this->audioTags;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->contentSource) {
            $res['ContentSource'] = $this->contentSource;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddStorageAudioTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFileObject'])) {
            $model->audioFileObject = $map['AudioFileObject'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['AudioTags'])) {
            $model->audioTags = $map['AudioTags'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ContentSource'])) {
            $model->contentSource = $map['ContentSource'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
