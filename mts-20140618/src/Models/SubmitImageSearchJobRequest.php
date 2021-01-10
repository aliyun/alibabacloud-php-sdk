<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitImageSearchJobRequest extends Model
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
    public $inputVideo;

    /**
     * @var string
     */
    public $inputImage;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'inputVideo'           => 'InputVideo',
        'inputImage'           => 'InputImage',
        'pipelineId'           => 'PipelineId',
        'fpDBId'               => 'FpDBId',
        'config'               => 'Config',
        'userData'             => 'UserData',
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
        if (null !== $this->inputVideo) {
            $res['InputVideo'] = $this->inputVideo;
        }
        if (null !== $this->inputImage) {
            $res['InputImage'] = $this->inputImage;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitImageSearchJobRequest
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
        if (isset($map['InputVideo'])) {
            $model->inputVideo = $map['InputVideo'];
        }
        if (isset($map['InputImage'])) {
            $model->inputImage = $map['InputImage'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
