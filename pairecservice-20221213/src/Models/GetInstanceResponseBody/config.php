<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody\config\dataManagements;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody\config\engines;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody\config\monitors;

class config extends Model
{
    /**
     * @var dataManagements[]
     */
    public $dataManagements;

    /**
     * @var engines[]
     */
    public $engines;

    /**
     * @var monitors[]
     */
    public $monitors;
    protected $_name = [
        'dataManagements' => 'DataManagements',
        'engines' => 'Engines',
        'monitors' => 'Monitors',
    ];

    public function validate()
    {
        if (\is_array($this->dataManagements)) {
            Model::validateArray($this->dataManagements);
        }
        if (\is_array($this->engines)) {
            Model::validateArray($this->engines);
        }
        if (\is_array($this->monitors)) {
            Model::validateArray($this->monitors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataManagements) {
            if (\is_array($this->dataManagements)) {
                $res['DataManagements'] = [];
                $n1 = 0;
                foreach ($this->dataManagements as $item1) {
                    $res['DataManagements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->engines) {
            if (\is_array($this->engines)) {
                $res['Engines'] = [];
                $n1 = 0;
                foreach ($this->engines as $item1) {
                    $res['Engines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->monitors) {
            if (\is_array($this->monitors)) {
                $res['Monitors'] = [];
                $n1 = 0;
                foreach ($this->monitors as $item1) {
                    $res['Monitors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataManagements'])) {
            if (!empty($map['DataManagements'])) {
                $model->dataManagements = [];
                $n1 = 0;
                foreach ($map['DataManagements'] as $item1) {
                    $model->dataManagements[$n1] = dataManagements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Engines'])) {
            if (!empty($map['Engines'])) {
                $model->engines = [];
                $n1 = 0;
                foreach ($map['Engines'] as $item1) {
                    $model->engines[$n1] = engines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Monitors'])) {
            if (!empty($map['Monitors'])) {
                $model->monitors = [];
                $n1 = 0;
                foreach ($map['Monitors'] as $item1) {
                    $model->monitors[$n1] = monitors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
