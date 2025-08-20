<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class OpenStructIdpWuyingSubConfig extends Model
{
    /**
     * @var string[]
     */
    public $aliuids;
    protected $_name = [
        'aliuids' => 'Aliuids',
    ];

    public function validate()
    {
        if (\is_array($this->aliuids)) {
            Model::validateArray($this->aliuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuids) {
            if (\is_array($this->aliuids)) {
                $res['Aliuids'] = [];
                $n1 = 0;
                foreach ($this->aliuids as $item1) {
                    $res['Aliuids'][$n1] = $item1;
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
        if (isset($map['Aliuids'])) {
            if (!empty($map['Aliuids'])) {
                $model->aliuids = [];
                $n1 = 0;
                foreach ($map['Aliuids'] as $item1) {
                    $model->aliuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
