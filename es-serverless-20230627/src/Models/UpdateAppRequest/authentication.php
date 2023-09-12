<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\authentication\basicAuth;
use AlibabaCloud\Tea\Model;

class authentication extends Model
{
    /**
     * @var basicAuth[]
     */
    public $basicAuth;
    protected $_name = [
        'basicAuth' => 'basicAuth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicAuth) {
            $res['basicAuth'] = [];
            if (null !== $this->basicAuth && \is_array($this->basicAuth)) {
                $n = 0;
                foreach ($this->basicAuth as $item) {
                    $res['basicAuth'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authentication
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['basicAuth'])) {
            if (!empty($map['basicAuth'])) {
                $model->basicAuth = [];
                $n                = 0;
                foreach ($map['basicAuth'] as $item) {
                    $model->basicAuth[$n++] = null !== $item ? basicAuth::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
