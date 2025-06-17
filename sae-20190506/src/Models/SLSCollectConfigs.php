<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class SLSCollectConfigs extends Model
{
    /**
     * @var SLSCollectConfig[]
     */
    public $collectConfigs;
    protected $_name = [
        'collectConfigs' => 'CollectConfigs',
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
                $res['CollectConfigs'] = [];
                $n1 = 0;
                foreach ($this->collectConfigs as $item1) {
                    $res['CollectConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CollectConfigs'])) {
            if (!empty($map['CollectConfigs'])) {
                $model->collectConfigs = [];
                $n1 = 0;
                foreach ($map['CollectConfigs'] as $item1) {
                    $model->collectConfigs[$n1] = SLSCollectConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
