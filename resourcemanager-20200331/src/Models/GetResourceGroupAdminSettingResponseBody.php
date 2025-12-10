<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class GetResourceGroupAdminSettingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $creatorAsAdmin;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creatorAsAdmin' => 'CreatorAsAdmin',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorAsAdmin) {
            $res['CreatorAsAdmin'] = $this->creatorAsAdmin;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CreatorAsAdmin'])) {
            $model->creatorAsAdmin = $map['CreatorAsAdmin'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
