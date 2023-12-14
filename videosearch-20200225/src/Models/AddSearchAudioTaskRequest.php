<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class AddSearchAudioTaskRequest extends Model
{
    /**
     * @example http://xxx
     *
     * @var string
     */
    public $audioFile;

    /**
     * @example Http://xxx
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
     * @example 0
     *
     * @var int
     */
    public $needFeatureFile;

    /**
     * @example test
     *
     * @var string
     */
    public $queryTags;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnAudioNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $sort;
    protected $_name = [
        'audioFile'         => 'AudioFile',
        'audioUrl'          => 'AudioUrl',
        'callbackUrl'       => 'CallbackUrl',
        'clientToken'       => 'ClientToken',
        'contentSource'     => 'ContentSource',
        'description'       => 'Description',
        'instanceId'        => 'InstanceId',
        'needFeatureFile'   => 'NeedFeatureFile',
        'queryTags'         => 'QueryTags',
        'resourceType'      => 'ResourceType',
        'returnAudioNumber' => 'ReturnAudioNumber',
        'sort'              => 'Sort',
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
        if (null !== $this->needFeatureFile) {
            $res['NeedFeatureFile'] = $this->needFeatureFile;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->returnAudioNumber) {
            $res['ReturnAudioNumber'] = $this->returnAudioNumber;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSearchAudioTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFile'])) {
            $model->audioFile = $map['AudioFile'];
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
        if (isset($map['NeedFeatureFile'])) {
            $model->needFeatureFile = $map['NeedFeatureFile'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ReturnAudioNumber'])) {
            $model->returnAudioNumber = $map['ReturnAudioNumber'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
