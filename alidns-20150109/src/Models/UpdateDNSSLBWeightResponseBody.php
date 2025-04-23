<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateDNSSLBWeightResponseBody extends Model
{
    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'recordId' => 'RecordId',
        'requestId' => 'RequestId',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
