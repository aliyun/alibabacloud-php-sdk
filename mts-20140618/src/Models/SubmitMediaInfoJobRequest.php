<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaInfoJobRequest extends Model
{
    /**
     * @description Specifies whether to enable the asynchronous mode for the job. We recommend that you set this parameter to true. Valid values:
     *
     *   **true**: enables the asynchronous mode.
     *   **false**: does not enable the asynchronous mode.
     *
     * @example true
     *
     * @var bool
     */
    public $async;

    /**
     * @description The information about the input media file. The value is a JSON string. You must perform the following operations to add the OSS bucket in which the input media file is stored as a media bucket: Log on to the **MPS console**, choose **Workflows** > **Media Buckets** in the left-side navigation pane, and then click **Add Bucket**. After you add the OSS bucket as a media bucket, you must perform URL encoding for the OSS object. For example, `{"Bucket":"example-bucket","Location":"example-location","Object":"example%2Fexample.flv"}` indicates the `example-bucket.example-location.aliyuncs.com/example/example.flv` file.
     *
     * > The OSS bucket must reside in the same region as your MPS service.
     *
     * This parameter is required.
     *
     * @example {"Bucket":"example-bucket","Location":"example-location","Object":"example%2Fexample.flv"}
     *
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the MPS queue to which the job was submitted. For more information, see [Terms](https://help.aliyun.com/document_detail/29197.html).
     *
     *   To view the ID of the MPS queue, log on to the [MPS console](https://mps.console.aliyun.com/overview) and choose **Global Settings** > **MPS queue and Callback** in the left-side navigation pane. On the MPS queue and Callback page, you can view the ID of an MPS queue or create an MPS queue.
     *   If you want to receive asynchronous message notifications, associate an MNS queue or topic with the MPS queue. For more information, see [Receive message notifications](https://www.alibabacloud.com/help/en/mps/receive-message-notifications/?spm=a2c63.p38356.0.0.b48576d2jxNSca).
     *
     * @example 88c6ca184c0e432bbf5b665e2a15****
     *
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

    /**
     * @description The custom data. The custom data can contain letters, digits, and hyphens (-), and can be up to 1,024 bytes in length. The custom data cannot start with a special character.
     *
     * @example testid-001
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'async' => 'Async',
        'input' => 'Input',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pipelineId' => 'PipelineId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaInfoJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
