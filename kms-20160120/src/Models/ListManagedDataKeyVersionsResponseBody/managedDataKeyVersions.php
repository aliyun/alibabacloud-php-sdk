<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListManagedDataKeyVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListManagedDataKeyVersionsResponseBody\managedDataKeyVersions\managedDataKeyVersion;

class managedDataKeyVersions extends Model
{
    /**
     * @var managedDataKeyVersion[]
     */
    public $managedDataKeyVersion;
    protected $_name = [
        'managedDataKeyVersion' => 'ManagedDataKeyVersion',
    ];

    public function validate()
    {
        if (\is_array($this->managedDataKeyVersion)) {
            Model::validateArray($this->managedDataKeyVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->managedDataKeyVersion) {
            if (\is_array($this->managedDataKeyVersion)) {
                $res['ManagedDataKeyVersion'] = [];
                $n1 = 0;
                foreach ($this->managedDataKeyVersion as $item1) {
                    $res['ManagedDataKeyVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ManagedDataKeyVersion'])) {
            if (!empty($map['ManagedDataKeyVersion'])) {
                $model->managedDataKeyVersion = [];
                $n1 = 0;
                foreach ($map['ManagedDataKeyVersion'] as $item1) {
                    $model->managedDataKeyVersion[$n1] = managedDataKeyVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
