<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance\bindVpcs\bindVpc;

class bindVpcs extends Model
{
    /**
     * @var bindVpc[]
     */
    public $bindVpc;
    protected $_name = [
        'bindVpc' => 'BindVpc',
    ];

    public function validate()
    {
        if (\is_array($this->bindVpc)) {
            Model::validateArray($this->bindVpc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindVpc) {
            if (\is_array($this->bindVpc)) {
                $res['BindVpc'] = [];
                $n1 = 0;
                foreach ($this->bindVpc as $item1) {
                    $res['BindVpc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BindVpc'])) {
            if (!empty($map['BindVpc'])) {
                $model->bindVpc = [];
                $n1 = 0;
                foreach ($map['BindVpc'] as $item1) {
                    $model->bindVpc[$n1] = bindVpc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
