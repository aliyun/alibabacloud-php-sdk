<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddSearchAudioTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $audioFileObject;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var int
     */
    public $returnAudioNumber;

    /**
     * @var string
     */
    public $queryTags;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $contentSource;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var int
     */
    public $needFeatureFile;

    /**
     * @var int
     */
    public $resourceType;
    protected $_name = [
        'audioFileObject'   => 'AudioFileObject',
        'clientToken'       => 'ClientToken',
        'audioUrl'          => 'AudioUrl',
        'returnAudioNumber' => 'ReturnAudioNumber',
        'queryTags'         => 'QueryTags',
        'callbackUrl'       => 'CallbackUrl',
        'instanceId'        => 'InstanceId',
        'description'       => 'Description',
        'contentSource'     => 'ContentSource',
        'sort'              => 'Sort',
        'needFeatureFile'   => 'NeedFeatureFile',
        'resourceType'      => 'ResourceType',
    ];

    public function validate()
    {
        Model::validateRequired('audioFileObject', $this->audioFileObject, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFileObject) {
            $res['AudioFileObject'] = $this->audioFileObject;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->returnAudioNumber) {
            $res['ReturnAudioNumber'] = $this->returnAudioNumber;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->contentSource) {
            $res['ContentSource'] = $this->contentSource;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->needFeatureFile) {
            $res['NeedFeatureFile'] = $this->needFeatureFile;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSearchAudioTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFileObject'])) {
            $model->audioFileObject = $map['AudioFileObject'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['ReturnAudioNumber'])) {
            $model->returnAudioNumber = $map['ReturnAudioNumber'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ContentSource'])) {
            $model->contentSource = $map['ContentSource'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['NeedFeatureFile'])) {
            $model->needFeatureFile = $map['NeedFeatureFile'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
