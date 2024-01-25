<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentNodeRequest\taints;
use AlibabaCloud\Tea\Model;

class UpdateEnvironmentNodeRequest extends Model
{
    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $applicationDisk;

    /**
     * @example /dev/vdc
     *
     * @var string
     */
    public $etcdDisk;

    /**
     * @example {"key1":"value1","key2":"value2"}
     *
     * @var mixed[]
     */
    public $labels;

    /**
     * @example rootPassword
     *
     * @var string
     */
    public $rootPassword;

    /**
     * @var taints[]
     */
    public $taints;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $tridentSystemDisk;

    /**
     * @example 400
     *
     * @var int
     */
    public $tridentSystemSizeDisk;
    protected $_name = [
        'applicationDisk'       => 'applicationDisk',
        'etcdDisk'              => 'etcdDisk',
        'labels'                => 'labels',
        'rootPassword'          => 'rootPassword',
        'taints'                => 'taints',
        'tridentSystemDisk'     => 'tridentSystemDisk',
        'tridentSystemSizeDisk' => 'tridentSystemSizeDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationDisk) {
            $res['applicationDisk'] = $this->applicationDisk;
        }
        if (null !== $this->etcdDisk) {
            $res['etcdDisk'] = $this->etcdDisk;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->rootPassword) {
            $res['rootPassword'] = $this->rootPassword;
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tridentSystemDisk) {
            $res['tridentSystemDisk'] = $this->tridentSystemDisk;
        }
        if (null !== $this->tridentSystemSizeDisk) {
            $res['tridentSystemSizeDisk'] = $this->tridentSystemSizeDisk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvironmentNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationDisk'])) {
            $model->applicationDisk = $map['applicationDisk'];
        }
        if (isset($map['etcdDisk'])) {
            $model->etcdDisk = $map['etcdDisk'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['rootPassword'])) {
            $model->rootPassword = $map['rootPassword'];
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tridentSystemDisk'])) {
            $model->tridentSystemDisk = $map['tridentSystemDisk'];
        }
        if (isset($map['tridentSystemSizeDisk'])) {
            $model->tridentSystemSizeDisk = $map['tridentSystemSizeDisk'];
        }

        return $model;
    }
}
