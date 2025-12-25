<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteInstanceRequest\deleteInstanceRequest;

class DeleteInstanceRequest extends Model
{
    /**
     * @var deleteInstanceRequest
     */
    public $deleteInstanceRequest;
    protected $_name = [
        'deleteInstanceRequest' => 'DeleteInstanceRequest',
    ];

    public function validate()
    {
        if (null !== $this->deleteInstanceRequest) {
            $this->deleteInstanceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteInstanceRequest) {
            $res['DeleteInstanceRequest'] = null !== $this->deleteInstanceRequest ? $this->deleteInstanceRequest->toArray($noStream) : $this->deleteInstanceRequest;
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
        if (isset($map['DeleteInstanceRequest'])) {
            $model->deleteInstanceRequest = self::fromMap($map['DeleteInstanceRequest']);
        }

        return $model;
    }
}
