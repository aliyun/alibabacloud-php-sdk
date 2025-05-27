<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteDataSourceLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $logInstanceId;
    protected $_name = [
        'count' => 'Count',
        'logInstanceId' => 'LogInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->logInstanceId) {
            $res['LogInstanceId'] = $this->logInstanceId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['LogInstanceId'])) {
            $model->logInstanceId = $map['LogInstanceId'];
        }

        return $model;
    }
}
