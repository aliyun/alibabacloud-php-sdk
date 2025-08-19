<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\authentication\basicAuth;

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
        if (\is_array($this->basicAuth)) {
            Model::validateArray($this->basicAuth);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicAuth) {
            if (\is_array($this->basicAuth)) {
                $res['basicAuth'] = [];
                $n1 = 0;
                foreach ($this->basicAuth as $item1) {
                    $res['basicAuth'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['basicAuth'])) {
            if (!empty($map['basicAuth'])) {
                $model->basicAuth = [];
                $n1 = 0;
                foreach ($map['basicAuth'] as $item1) {
                    $model->basicAuth[$n1] = basicAuth::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
