<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponseBody;

use AlibabaCloud\Tea\Model;

class keyVersion extends Model
{
    /**
     * @description The date and time when the version was created. The time is displayed in UTC.
     *
     * @example 2019-08-02T10:38:27Z
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * @example 0b30658a-ed1a-4922-b8f7-a673ca9c****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The ID of the version.
     *
     * @example c0a3d5dc-0b47-4199-a050-b289349a****
     *
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'creationDate' => 'CreationDate',
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }

        return $model;
    }
}
