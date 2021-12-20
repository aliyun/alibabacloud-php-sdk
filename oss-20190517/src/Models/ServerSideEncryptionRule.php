<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ServerSideEncryptionRule extends Model
{
    /**
     * @var ApplyServerSideEncryptionByDefault
     */
    public $applyServerSideEncryptionByDefault;
    protected $_name = [
        'applyServerSideEncryptionByDefault' => 'ApplyServerSideEncryptionByDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyServerSideEncryptionByDefault) {
            $res['ApplyServerSideEncryptionByDefault'] = null !== $this->applyServerSideEncryptionByDefault ? $this->applyServerSideEncryptionByDefault->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServerSideEncryptionRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyServerSideEncryptionByDefault'])) {
            $model->applyServerSideEncryptionByDefault = ApplyServerSideEncryptionByDefault::fromMap($map['ApplyServerSideEncryptionByDefault']);
        }

        return $model;
    }
}
