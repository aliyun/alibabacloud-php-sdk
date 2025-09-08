<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\SLSConfig\collectConfigs;

class SLSConfig extends Model
{
    /**
     * @var collectConfigs[]
     */
    public $collectConfigs;
    protected $_name = [
        'collectConfigs' => 'collectConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->collectConfigs)) {
            Model::validateArray($this->collectConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectConfigs) {
            if (\is_array($this->collectConfigs)) {
                $res['collectConfigs'] = [];
                $n1 = 0;
                foreach ($this->collectConfigs as $item1) {
                    $res['collectConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['collectConfigs'])) {
            if (!empty($map['collectConfigs'])) {
                $model->collectConfigs = [];
                $n1 = 0;
                foreach ($map['collectConfigs'] as $item1) {
                    $model->collectConfigs[$n1] = collectConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
