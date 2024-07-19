<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest\selfManagedResourceOptions\nodeTolerations;
use AlibabaCloud\Tea\Model;

class selfManagedResourceOptions extends Model
{
    /**
     * @description Tag tag key-value pairs for nodes.
     *
     * @var string[]
     */
    public $nodeMatchLabels;

    /**
     * @description Tolerations for nodes.
     *
     * @var nodeTolerations[]
     */
    public $nodeTolerations;
    protected $_name = [
        'nodeMatchLabels' => 'NodeMatchLabels',
        'nodeTolerations' => 'NodeTolerations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeMatchLabels) {
            $res['NodeMatchLabels'] = $this->nodeMatchLabels;
        }
        if (null !== $this->nodeTolerations) {
            $res['NodeTolerations'] = [];
            if (null !== $this->nodeTolerations && \is_array($this->nodeTolerations)) {
                $n = 0;
                foreach ($this->nodeTolerations as $item) {
                    $res['NodeTolerations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selfManagedResourceOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeMatchLabels'])) {
            $model->nodeMatchLabels = $map['NodeMatchLabels'];
        }
        if (isset($map['NodeTolerations'])) {
            if (!empty($map['NodeTolerations'])) {
                $model->nodeTolerations = [];
                $n                      = 0;
                foreach ($map['NodeTolerations'] as $item) {
                    $model->nodeTolerations[$n++] = null !== $item ? nodeTolerations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
