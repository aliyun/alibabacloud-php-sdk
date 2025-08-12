<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;

use AlibabaCloud\Dara\Model;

class vodParams extends Model
{
    /**
     * @var int
     */
    public $autoCompose;

    /**
     * @var string
     */
    public $composeVodTranscodeGroupId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $vodTranscodeGroupId;
    protected $_name = [
        'autoCompose' => 'AutoCompose',
        'composeVodTranscodeGroupId' => 'ComposeVodTranscodeGroupId',
        'storageLocation' => 'StorageLocation',
        'vodTranscodeGroupId' => 'VodTranscodeGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCompose) {
            $res['AutoCompose'] = $this->autoCompose;
        }

        if (null !== $this->composeVodTranscodeGroupId) {
            $res['ComposeVodTranscodeGroupId'] = $this->composeVodTranscodeGroupId;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->vodTranscodeGroupId) {
            $res['VodTranscodeGroupId'] = $this->vodTranscodeGroupId;
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
        if (isset($map['AutoCompose'])) {
            $model->autoCompose = $map['AutoCompose'];
        }

        if (isset($map['ComposeVodTranscodeGroupId'])) {
            $model->composeVodTranscodeGroupId = $map['ComposeVodTranscodeGroupId'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }

        return $model;
    }
}
