<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertPrepayInstanceRequest\convertPrepayInstanceRequest;

class ConvertPrepayInstanceRequest extends Model
{
    /**
     * @var convertPrepayInstanceRequest
     */
    public $convertPrepayInstanceRequest;
    protected $_name = [
        'convertPrepayInstanceRequest' => 'ConvertPrepayInstanceRequest',
    ];

    public function validate()
    {
        if (null !== $this->convertPrepayInstanceRequest) {
            $this->convertPrepayInstanceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->convertPrepayInstanceRequest) {
            $res['ConvertPrepayInstanceRequest'] = null !== $this->convertPrepayInstanceRequest ? $this->convertPrepayInstanceRequest->toArray($noStream) : $this->convertPrepayInstanceRequest;
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
        if (isset($map['ConvertPrepayInstanceRequest'])) {
            $model->convertPrepayInstanceRequest = self::fromMap($map['ConvertPrepayInstanceRequest']);
        }

        return $model;
    }
}
