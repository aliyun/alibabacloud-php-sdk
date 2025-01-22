<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetTaskInstanceLogRequest extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $runNumber;
    protected $_name = [
        'id'        => 'Id',
        'runNumber' => 'RunNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->runNumber) {
            $res['RunNumber'] = $this->runNumber;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RunNumber'])) {
            $model->runNumber = $map['RunNumber'];
        }

        return $model;
    }
}
