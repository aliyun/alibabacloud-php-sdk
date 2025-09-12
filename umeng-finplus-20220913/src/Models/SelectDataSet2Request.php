<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models;

use AlibabaCloud\Dara\Model;

class SelectDataSet2Request extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var int
     */
    public $dataSetId;
    protected $_name = [
        'clientId' => 'clientId',
        'dataSetId' => 'dataSetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->dataSetId) {
            $res['dataSetId'] = $this->dataSetId;
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['dataSetId'])) {
            $model->dataSetId = $map['dataSetId'];
        }

        return $model;
    }
}
