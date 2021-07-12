<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyGroupRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $inProtocol;

    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var bool
     */
    public $lazyPull;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var int
     */
    public $captureInterval;

    /**
     * @var int
     */
    public $captureImage;

    /**
     * @var int
     */
    public $captureVideo;

    /**
     * @var string
     */
    public $captureOssBucket;

    /**
     * @var string
     */
    public $captureOssPath;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'id'               => 'Id',
        'name'             => 'Name',
        'description'      => 'Description',
        'region'           => 'Region',
        'inProtocol'       => 'InProtocol',
        'outProtocol'      => 'OutProtocol',
        'enabled'          => 'Enabled',
        'pushDomain'       => 'PushDomain',
        'playDomain'       => 'PlayDomain',
        'lazyPull'         => 'LazyPull',
        'callback'         => 'Callback',
        'captureInterval'  => 'CaptureInterval',
        'captureImage'     => 'CaptureImage',
        'captureVideo'     => 'CaptureVideo',
        'captureOssBucket' => 'CaptureOssBucket',
        'captureOssPath'   => 'CaptureOssPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->inProtocol) {
            $res['InProtocol'] = $this->inProtocol;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->lazyPull) {
            $res['LazyPull'] = $this->lazyPull;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->captureInterval) {
            $res['CaptureInterval'] = $this->captureInterval;
        }
        if (null !== $this->captureImage) {
            $res['CaptureImage'] = $this->captureImage;
        }
        if (null !== $this->captureVideo) {
            $res['CaptureVideo'] = $this->captureVideo;
        }
        if (null !== $this->captureOssBucket) {
            $res['CaptureOssBucket'] = $this->captureOssBucket;
        }
        if (null !== $this->captureOssPath) {
            $res['CaptureOssPath'] = $this->captureOssPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InProtocol'])) {
            $model->inProtocol = $map['InProtocol'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['LazyPull'])) {
            $model->lazyPull = $map['LazyPull'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CaptureInterval'])) {
            $model->captureInterval = $map['CaptureInterval'];
        }
        if (isset($map['CaptureImage'])) {
            $model->captureImage = $map['CaptureImage'];
        }
        if (isset($map['CaptureVideo'])) {
            $model->captureVideo = $map['CaptureVideo'];
        }
        if (isset($map['CaptureOssBucket'])) {
            $model->captureOssBucket = $map['CaptureOssBucket'];
        }
        if (isset($map['CaptureOssPath'])) {
            $model->captureOssPath = $map['CaptureOssPath'];
        }

        return $model;
    }
}
