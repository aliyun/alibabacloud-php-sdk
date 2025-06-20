<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string[]
     */
    public $attributionApp;

    /**
     * @var string[]
     */
    public $influenceApp;

    /**
     * @var string[]
     */
    public $instance;

    /**
     * @var string[]
     */
    public $nc;

    /**
     * @var string[]
     */
    public $uids;
    protected $_name = [
        'attributionApp' => 'AttributionApp',
        'influenceApp' => 'InfluenceApp',
        'instance' => 'Instance',
        'nc' => 'Nc',
        'uids' => 'Uids',
    ];

    public function validate()
    {
        if (\is_array($this->attributionApp)) {
            Model::validateArray($this->attributionApp);
        }
        if (\is_array($this->influenceApp)) {
            Model::validateArray($this->influenceApp);
        }
        if (\is_array($this->instance)) {
            Model::validateArray($this->instance);
        }
        if (\is_array($this->nc)) {
            Model::validateArray($this->nc);
        }
        if (\is_array($this->uids)) {
            Model::validateArray($this->uids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributionApp) {
            if (\is_array($this->attributionApp)) {
                $res['AttributionApp'] = [];
                $n1 = 0;
                foreach ($this->attributionApp as $item1) {
                    $res['AttributionApp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->influenceApp) {
            if (\is_array($this->influenceApp)) {
                $res['InfluenceApp'] = [];
                $n1 = 0;
                foreach ($this->influenceApp as $item1) {
                    $res['InfluenceApp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instance) {
            if (\is_array($this->instance)) {
                $res['Instance'] = [];
                $n1 = 0;
                foreach ($this->instance as $item1) {
                    $res['Instance'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nc) {
            if (\is_array($this->nc)) {
                $res['Nc'] = [];
                $n1 = 0;
                foreach ($this->nc as $item1) {
                    $res['Nc'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uids) {
            if (\is_array($this->uids)) {
                $res['Uids'] = [];
                $n1 = 0;
                foreach ($this->uids as $item1) {
                    $res['Uids'][$n1] = $item1;
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
        if (isset($map['AttributionApp'])) {
            if (!empty($map['AttributionApp'])) {
                $model->attributionApp = [];
                $n1 = 0;
                foreach ($map['AttributionApp'] as $item1) {
                    $model->attributionApp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InfluenceApp'])) {
            if (!empty($map['InfluenceApp'])) {
                $model->influenceApp = [];
                $n1 = 0;
                foreach ($map['InfluenceApp'] as $item1) {
                    $model->influenceApp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n1 = 0;
                foreach ($map['Instance'] as $item1) {
                    $model->instance[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Nc'])) {
            if (!empty($map['Nc'])) {
                $model->nc = [];
                $n1 = 0;
                foreach ($map['Nc'] as $item1) {
                    $model->nc[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Uids'])) {
            if (!empty($map['Uids'])) {
                $model->uids = [];
                $n1 = 0;
                foreach ($map['Uids'] as $item1) {
                    $model->uids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
