<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ConvertPrepayInstanceRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertPrepayInstanceRequest\convertPrepayInstanceRequest
     */
    public $convertPrepayInstanceRequest;
    protected $_name = [
        'convertPrepayInstanceRequest' => 'ConvertPrepayInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertPrepayInstanceRequest) {
            $res['ConvertPrepayInstanceRequest'] = null !== $this->convertPrepayInstanceRequest ? $this->convertPrepayInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertPrepayInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertPrepayInstanceRequest'])) {
            $model->convertPrepayInstanceRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertPrepayInstanceRequest\convertPrepayInstanceRequest::fromMap($map['ConvertPrepayInstanceRequest']);
        }

        return $model;
    }
}
