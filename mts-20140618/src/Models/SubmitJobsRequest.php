<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class SubmitJobsRequest extends Model
{
    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $outputBucket;

    /**
     * @var string
     */
    public $outputLocation;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'input' => 'Input',
        'outputBucket' => 'OutputBucket',
        'outputLocation' => 'OutputLocation',
        'outputs' => 'Outputs',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pipelineId' => 'PipelineId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->outputBucket) {
            $res['OutputBucket'] = $this->outputBucket;
        }

        if (null !== $this->outputLocation) {
            $res['OutputLocation'] = $this->outputLocation;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['OutputBucket'])) {
            $model->outputBucket = $map['OutputBucket'];
        }

        if (isset($map['OutputLocation'])) {
            $model->outputLocation = $map['OutputLocation'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
