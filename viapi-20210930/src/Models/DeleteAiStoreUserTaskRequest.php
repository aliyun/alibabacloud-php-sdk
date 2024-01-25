<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class DeleteAiStoreUserTaskRequest extends Model
{
    /**
     * @var string
     */
    public $aistoreVersion;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'aistoreVersion' => 'AistoreVersion',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aistoreVersion) {
            $res['AistoreVersion'] = $this->aistoreVersion;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAiStoreUserTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AistoreVersion'])) {
            $model->aistoreVersion = $map['AistoreVersion'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
