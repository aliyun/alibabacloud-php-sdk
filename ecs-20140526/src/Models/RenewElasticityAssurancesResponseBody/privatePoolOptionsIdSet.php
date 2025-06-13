<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RenewElasticityAssurancesResponseBody;

use AlibabaCloud\Dara\Model;

class privatePoolOptionsIdSet extends Model
{
    /**
     * @var string[]
     */
    public $privatePoolOptionsId;
    protected $_name = [
        'privatePoolOptionsId' => 'PrivatePoolOptionsId',
    ];

    public function validate()
    {
        if (\is_array($this->privatePoolOptionsId)) {
            Model::validateArray($this->privatePoolOptionsId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privatePoolOptionsId) {
            if (\is_array($this->privatePoolOptionsId)) {
                $res['PrivatePoolOptionsId'] = [];
                $n1 = 0;
                foreach ($this->privatePoolOptionsId as $item1) {
                    $res['PrivatePoolOptionsId'][$n1] = $item1;
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
        if (isset($map['PrivatePoolOptionsId'])) {
            if (!empty($map['PrivatePoolOptionsId'])) {
                $model->privatePoolOptionsId = [];
                $n1 = 0;
                foreach ($map['PrivatePoolOptionsId'] as $item1) {
                    $model->privatePoolOptionsId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
