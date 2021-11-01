<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\RenewInstanceRequest\renewInstanceRequest
     */
    public $renewInstanceRequest;
    protected $_name = [
        'renewInstanceRequest' => 'RenewInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renewInstanceRequest) {
            $res['RenewInstanceRequest'] = null !== $this->renewInstanceRequest ? $this->renewInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenewInstanceRequest'])) {
            $model->renewInstanceRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\RenewInstanceRequest\renewInstanceRequest::fromMap($map['RenewInstanceRequest']);
        }

        return $model;
    }
}
