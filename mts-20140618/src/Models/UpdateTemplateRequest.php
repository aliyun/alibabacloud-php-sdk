<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $container;

    /**
     * @var string
     */
    public $video;

    /**
     * @var string
     */
    public $audio;

    /**
     * @var string
     */
    public $muxConfig;

    /**
     * @var string
     */
    public $transConfig;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateId'           => 'TemplateId',
        'name'                 => 'Name',
        'container'            => 'Container',
        'video'                => 'Video',
        'audio'                => 'Audio',
        'muxConfig'            => 'MuxConfig',
        'transConfig'          => 'TransConfig',
        'ownerAccount'         => 'OwnerAccount',
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = $this->muxConfig;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = $this->transConfig;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = $map['MuxConfig'];
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = $map['TransConfig'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
