<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserIdRequest\externalId;

class GetUserIdRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var externalId
     */
    public $externalId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'externalId' => 'ExternalId',
    ];

    public function validate()
    {
        if (null !== $this->externalId) {
            $this->externalId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->externalId) {
            $res['ExternalId'] = null !== $this->externalId ? $this->externalId->toArray($noStream) : $this->externalId;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['ExternalId'])) {
            $model->externalId = externalId::fromMap($map['ExternalId']);
        }

        return $model;
    }
}
