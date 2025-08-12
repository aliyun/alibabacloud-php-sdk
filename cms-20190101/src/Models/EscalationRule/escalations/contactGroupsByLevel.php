<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\EscalationRule\escalations;

use AlibabaCloud\Dara\Model;

class contactGroupsByLevel extends Model
{
    /**
     * @var string[]
     */
    public $critical;

    /**
     * @var string[]
     */
    public $error;

    /**
     * @var string[]
     */
    public $info;

    /**
     * @var string[]
     */
    public $resolve;

    /**
     * @var string[]
     */
    public $warning;
    protected $_name = [
        'critical' => 'Critical',
        'error' => 'Error',
        'info' => 'Info',
        'resolve' => 'Resolve',
        'warning' => 'Warning',
    ];

    public function validate()
    {
        if (\is_array($this->critical)) {
            Model::validateArray($this->critical);
        }
        if (\is_array($this->error)) {
            Model::validateArray($this->error);
        }
        if (\is_array($this->info)) {
            Model::validateArray($this->info);
        }
        if (\is_array($this->resolve)) {
            Model::validateArray($this->resolve);
        }
        if (\is_array($this->warning)) {
            Model::validateArray($this->warning);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            if (\is_array($this->critical)) {
                $res['Critical'] = [];
                $n1 = 0;
                foreach ($this->critical as $item1) {
                    $res['Critical'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->error) {
            if (\is_array($this->error)) {
                $res['Error'] = [];
                $n1 = 0;
                foreach ($this->error as $item1) {
                    $res['Error'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->info) {
            if (\is_array($this->info)) {
                $res['Info'] = [];
                $n1 = 0;
                foreach ($this->info as $item1) {
                    $res['Info'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resolve) {
            if (\is_array($this->resolve)) {
                $res['Resolve'] = [];
                $n1 = 0;
                foreach ($this->resolve as $item1) {
                    $res['Resolve'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warning) {
            if (\is_array($this->warning)) {
                $res['Warning'] = [];
                $n1 = 0;
                foreach ($this->warning as $item1) {
                    $res['Warning'][$n1] = $item1;
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
        if (isset($map['Critical'])) {
            if (!empty($map['Critical'])) {
                $model->critical = [];
                $n1 = 0;
                foreach ($map['Critical'] as $item1) {
                    $model->critical[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Error'])) {
            if (!empty($map['Error'])) {
                $model->error = [];
                $n1 = 0;
                foreach ($map['Error'] as $item1) {
                    $model->error[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Info'])) {
            if (!empty($map['Info'])) {
                $model->info = [];
                $n1 = 0;
                foreach ($map['Info'] as $item1) {
                    $model->info[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Resolve'])) {
            if (!empty($map['Resolve'])) {
                $model->resolve = [];
                $n1 = 0;
                foreach ($map['Resolve'] as $item1) {
                    $model->resolve[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = [];
                $n1 = 0;
                foreach ($map['Warning'] as $item1) {
                    $model->warning[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
