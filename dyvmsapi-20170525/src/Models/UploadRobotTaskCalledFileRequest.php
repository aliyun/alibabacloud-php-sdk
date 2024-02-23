<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class UploadRobotTaskCalledFileRequest extends Model
{
    /**
     * @description The called numbers. Separate multiple called numbers with commas (,).
     *
     * > After you create a robocall task, you must upload called numbers in batches. You can upload up to 300,000 called numbers for each task.
     * @example 1370****000,1370****111
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description The unique ID of the robocall task. You can call the [CreateRobotTask](~~CreateRobotTask~~) operation to obtain the ID of the robocall task.
     *
     * @example 1045****
     *
     * @var int
     */
    public $id;

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
     * @description The values of the variable in the text-to-speech (TTS) template, in the JSON format. The variable values specified by the TtsParam parameter must match the variable names specified by the TtsParamHead parameter.
     *
     *   If all the called numbers carry the same variable values, you can set the value of the number field to **all** and upload only one copy of the variable values.
     *   If only some of the called numbers carry the same variable values, you can set the value of the number field to **all** for these called numbers and set the value of the number field and variable values for other called numbers based on your business requirements. The system preferentially selects the values that you set for the called numbers.
     *
     * @example [{"number":"1370****000","params":["xiaowang","xiaoli","xiaozhou"]}]
     *
     * @var string
     */
    public $ttsParam;

    /**
     * @description The list of variable names carried in the robocall task, in the JSON format. The TtsParamHead parameter must be used together with the TtsParam parameter.
     *
     * @example ["name1","name2","name3"]
     *
     * @var string
     */
    public $ttsParamHead;
    protected $_name = [
        'calledNumber'         => 'CalledNumber',
        'id'                   => 'Id',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ttsParam'             => 'TtsParam',
        'ttsParamHead'         => 'TtsParamHead',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }
        if (null !== $this->ttsParamHead) {
            $res['TtsParamHead'] = $this->ttsParamHead;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadRobotTaskCalledFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
        }
        if (isset($map['TtsParamHead'])) {
            $model->ttsParamHead = $map['TtsParamHead'];
        }

        return $model;
    }
}
