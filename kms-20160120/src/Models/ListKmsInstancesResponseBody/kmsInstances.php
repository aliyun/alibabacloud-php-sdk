<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody\kmsInstances\kmsInstance;

class kmsInstances extends Model
{
    /**
     * @var kmsInstance[]
     */
    public $kmsInstance;
    protected $_name = [
        'kmsInstance' => 'KmsInstance',
    ];

    public function validate()
    {
        if (\is_array($this->kmsInstance)) {
            Model::validateArray($this->kmsInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsInstance) {
            if (\is_array($this->kmsInstance)) {
                $res['KmsInstance'] = [];
                $n1 = 0;
                foreach ($this->kmsInstance as $item1) {
                    $res['KmsInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KmsInstance'])) {
            if (!empty($map['KmsInstance'])) {
                $model->kmsInstance = [];
                $n1 = 0;
                foreach ($map['KmsInstance'] as $item1) {
                    $model->kmsInstance[$n1] = kmsInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
