<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetMaterializedViewRequest extends Model
{
    /**
     * @var bool
     */
    public $returnStatus;
    protected $_name = [
        'returnStatus' => 'returnStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->returnStatus) {
            $res['returnStatus'] = $this->returnStatus;
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
        if (isset($map['returnStatus'])) {
            $model->returnStatus = $map['returnStatus'];
        }

        return $model;
    }
}
