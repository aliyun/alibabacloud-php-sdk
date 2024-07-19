<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest;

use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest\selfManagedResourceOptions\nodeTolerations;
use AlibabaCloud\Tea\Model;

class selfManagedResourceOptions extends Model
{
    /**
     * @description The ID of the self-managed cluster.
     *
     * @example cf0386f250f2545689ca7fdd1cd******
     *
     * @var string
     */
    public $externalClusterId;

    /**
     * @description The tag key-value pairs for nodes.
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

    /**
     * @description The name of the RAM user to which the permissions on Elastic Algorithm Service of Platform for AI (PAI-EAS) are granted.
     *
     * @example clusterrole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'externalClusterId' => 'ExternalClusterId',
        'nodeMatchLabels'   => 'NodeMatchLabels',
        'nodeTolerations'   => 'NodeTolerations',
        'roleName'          => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalClusterId) {
            $res['ExternalClusterId'] = $this->externalClusterId;
        }
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
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['ExternalClusterId'])) {
            $model->externalClusterId = $map['ExternalClusterId'];
        }
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
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
