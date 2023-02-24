<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponseBody\keyVersions;

use AlibabaCloud\Tea\Model;

class keyVersion extends Model
{
    /**
     * @description The date and time when the CMK version was created. The time is displayed in UTC.
     *
     * @example 2016-03-25T10:42:40Z
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description The globally unique ID of the CMK.
     *
     * >  If you set the KeyId parameter to the alias of the CMK, the ID of the CMK to which the alias is bound is returned.
     * @example 0b30658a-ed1a-4922-b8f7-a673ca9c****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The globally unique ID of the CMK version.
     *
     * @example 1e3304fd-68ac-4d5b-8886-ae5f01a1****
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
