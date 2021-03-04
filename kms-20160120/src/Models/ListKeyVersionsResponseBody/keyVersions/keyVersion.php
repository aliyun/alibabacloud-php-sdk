<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponseBody\keyVersions;

use AlibabaCloud\Tea\Model;

class keyVersion extends Model
{
    /**
     * @var string
     */
    public $keyVersionId;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $creationDate;
    protected $_name = [
        'keyVersionId' => 'KeyVersionId',
        'keyId'        => 'KeyId',
        'creationDate' => 'CreationDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
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
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }

        return $model;
    }
}
