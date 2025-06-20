<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string[]
     */
    public $nc;

    /**
     * @var string[]
     */
    public $uids;

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
    protected $_name = [
        'nc' => 'Nc',
        'uids' => 'Uids',
        'attributionApp' => 'attributionApp',
        'influenceApp' => 'influenceApp',
        'instance' => 'instance',
    ];

    public function validate()
    {
        if (\is_array($this->nc)) {
            Model::validateArray($this->nc);
        }
        if (\is_array($this->uids)) {
            Model::validateArray($this->uids);
        }
        if (\is_array($this->attributionApp)) {
            Model::validateArray($this->attributionApp);
        }
        if (\is_array($this->influenceApp)) {
            Model::validateArray($this->influenceApp);
        }
        if (\is_array($this->instance)) {
            Model::validateArray($this->instance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->attributionApp) {
            if (\is_array($this->attributionApp)) {
                $res['attributionApp'] = [];
                $n1 = 0;
                foreach ($this->attributionApp as $item1) {
                    $res['attributionApp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->influenceApp) {
            if (\is_array($this->influenceApp)) {
                $res['influenceApp'] = [];
                $n1 = 0;
                foreach ($this->influenceApp as $item1) {
                    $res['influenceApp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instance) {
            if (\is_array($this->instance)) {
                $res['instance'] = [];
                $n1 = 0;
                foreach ($this->instance as $item1) {
                    $res['instance'][$n1] = $item1;
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

        if (isset($map['attributionApp'])) {
            if (!empty($map['attributionApp'])) {
                $model->attributionApp = [];
                $n1 = 0;
                foreach ($map['attributionApp'] as $item1) {
                    $model->attributionApp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['influenceApp'])) {
            if (!empty($map['influenceApp'])) {
                $model->influenceApp = [];
                $n1 = 0;
                foreach ($map['influenceApp'] as $item1) {
                    $model->influenceApp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['instance'])) {
            if (!empty($map['instance'])) {
                $model->instance = [];
                $n1 = 0;
                foreach ($map['instance'] as $item1) {
                    $model->instance[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
