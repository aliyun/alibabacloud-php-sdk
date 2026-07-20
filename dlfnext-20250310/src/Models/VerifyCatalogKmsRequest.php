<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class VerifyCatalogKmsRequest extends Model
{
    /**
     * @var string
     */
    public $kmsKeyId;
    protected $_name = [
        'kmsKeyId' => 'kmsKeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsKeyId) {
            $res['kmsKeyId'] = $this->kmsKeyId;
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
        if (isset($map['kmsKeyId'])) {
            $model->kmsKeyId = $map['kmsKeyId'];
        }

        return $model;
    }
}
