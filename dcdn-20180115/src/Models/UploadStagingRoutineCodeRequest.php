<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UploadStagingRoutineCodeRequest extends Model
{
    /**
     * @var string
     */
    public $codeDescription;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'codeDescription' => 'CodeDescription',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeDescription) {
            $res['CodeDescription'] = $this->codeDescription;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadStagingRoutineCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDescription'])) {
            $model->codeDescription = $map['CodeDescription'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
