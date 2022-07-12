<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeKmsKeysResponseBody;

use AlibabaCloud\Tea\Model;

class keys extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'Alias',
        'arn'   => 'Arn',
        'keyId' => 'KeyId',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
