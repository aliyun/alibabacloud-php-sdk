<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyGroupRequest extends Model
{
    /**
     * @example http://example.com/callback
     *
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @example 32388487739092994-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example gb28181
     *
     * @var string
     */
    public $inProtocol;

    /**
     * @example false
     *
     * @var bool
     */
    public $lazyPull;

    /**
     * @example myGroup
     *
     * @var string
     */
    public $name;

    /**
     * @example flv,rtmp,hls
     *
     * @var string
     */
    public $outProtocol;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example myplay.com
     *
     * @var string
     */
    public $playDomain;

    /**
     * @example mypush.com
     *
     * @var string
     */
    public $pushDomain;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'callback'    => 'Callback',
        'description' => 'Description',
        'enabled'     => 'Enabled',
        'id'          => 'Id',
        'inProtocol'  => 'InProtocol',
        'lazyPull'    => 'LazyPull',
        'name'        => 'Name',
        'outProtocol' => 'OutProtocol',
        'ownerId'     => 'OwnerId',
        'playDomain'  => 'PlayDomain',
        'pushDomain'  => 'PushDomain',
        'region'      => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inProtocol) {
            $res['InProtocol'] = $this->inProtocol;
        }
        if (null !== $this->lazyPull) {
            $res['LazyPull'] = $this->lazyPull;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InProtocol'])) {
            $model->inProtocol = $map['InProtocol'];
        }
        if (isset($map['LazyPull'])) {
            $model->lazyPull = $map['LazyPull'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
