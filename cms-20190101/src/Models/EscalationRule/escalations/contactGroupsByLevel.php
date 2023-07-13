<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\EscalationRule\escalations;

use AlibabaCloud\Tea\Model;

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
        'error'    => 'Error',
        'info'     => 'Info',
        'resolve'  => 'Resolve',
        'warning'  => 'Warning',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = $this->critical;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->resolve) {
            $res['Resolve'] = $this->resolve;
        }
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroupsByLevel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Critical'])) {
            if (!empty($map['Critical'])) {
                $model->critical = $map['Critical'];
            }
        }
        if (isset($map['Error'])) {
            if (!empty($map['Error'])) {
                $model->error = $map['Error'];
            }
        }
        if (isset($map['Info'])) {
            if (!empty($map['Info'])) {
                $model->info = $map['Info'];
            }
        }
        if (isset($map['Resolve'])) {
            if (!empty($map['Resolve'])) {
                $model->resolve = $map['Resolve'];
            }
        }
        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = $map['Warning'];
            }
        }

        return $model;
    }
}
