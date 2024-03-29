<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserIdRequest\externalId;
use AlibabaCloud\Tea\Model;

class GetUserIdRequest extends Model
{
    /**
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @var externalId
     */
    public $externalId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'externalId'  => 'ExternalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = null !== $this->externalId ? $this->externalId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdRequest
     */
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
