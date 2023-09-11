<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance;

use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance\bindVpcs\bindVpc;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindVpc) {
            $res['BindVpc'] = [];
            if (null !== $this->bindVpc && \is_array($this->bindVpc)) {
                $n = 0;
                foreach ($this->bindVpc as $item) {
                    $res['BindVpc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindVpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindVpc'])) {
            if (!empty($map['BindVpc'])) {
                $model->bindVpc = [];
                $n              = 0;
                foreach ($map['BindVpc'] as $item) {
                    $model->bindVpc[$n++] = null !== $item ? bindVpc::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
