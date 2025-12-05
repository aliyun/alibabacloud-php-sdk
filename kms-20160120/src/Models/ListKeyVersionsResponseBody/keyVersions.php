<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponseBody\keyVersions\keyVersion;

class keyVersions extends Model
{
    /**
     * @var keyVersion[]
     */
    public $keyVersion;
    protected $_name = [
        'keyVersion' => 'KeyVersion',
    ];

    public function validate()
    {
        if (\is_array($this->keyVersion)) {
            Model::validateArray($this->keyVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyVersion) {
            if (\is_array($this->keyVersion)) {
                $res['KeyVersion'] = [];
                $n1 = 0;
                foreach ($this->keyVersion as $item1) {
                    $res['KeyVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['KeyVersion'])) {
            if (!empty($map['KeyVersion'])) {
                $model->keyVersion = [];
                $n1 = 0;
                foreach ($map['KeyVersion'] as $item1) {
                    $model->keyVersion[$n1] = keyVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
