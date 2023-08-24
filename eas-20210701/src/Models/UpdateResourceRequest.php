<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest\nodeTolerations;
use AlibabaCloud\Tea\Model;

class UpdateResourceRequest extends Model
{
    /**
     * @var string[]
     */
    public $nodeMatchLabels;

    /**
     * @var nodeTolerations[]
     */
    public $nodeTolerations;

    /**
     * @example iot
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'nodeMatchLabels' => 'NodeMatchLabels',
        'nodeTolerations' => 'NodeTolerations',
        'resourceName'    => 'ResourceName',
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
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceRequest
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
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
