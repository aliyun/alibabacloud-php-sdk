<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class CreateCloneVoiceRequest extends Model
{
    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $model;
    protected $_name = [
        'businessUnitId' => 'BusinessUnitId',
        'fileKey' => 'FileKey',
        'model' => 'Model',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
