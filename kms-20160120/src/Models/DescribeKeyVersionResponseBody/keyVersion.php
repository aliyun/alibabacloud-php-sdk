<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionResponseBody;

use AlibabaCloud\Dara\Model;

class keyVersion extends Model
{
    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'creationDate' => 'CreationDate',
        'keyId' => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
