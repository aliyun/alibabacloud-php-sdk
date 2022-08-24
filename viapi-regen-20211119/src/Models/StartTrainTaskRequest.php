<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class StartTrainTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $forceStartFlag;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'forceStartFlag' => 'ForceStartFlag',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceStartFlag) {
            $res['ForceStartFlag'] = $this->forceStartFlag;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartTrainTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceStartFlag'])) {
            $model->forceStartFlag = $map['ForceStartFlag'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
