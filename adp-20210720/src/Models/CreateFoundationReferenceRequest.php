<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\CreateFoundationReferenceRequest\componentConfigs;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateFoundationReferenceRequest\foundationReferenceConfigs;
use AlibabaCloud\Tea\Model;

class CreateFoundationReferenceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterConfig;

    /**
     * @var componentConfigs[]
     */
    public $componentConfigs;

    /**
     * @var foundationReferenceConfigs[]
     */
    public $foundationReferenceConfigs;

    /**
     * @example 796f9044-8684-4de5-9b12-xxxx
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @var string
     */
    public $originFoundationReferenceUID;
    protected $_name = [
        'clusterConfig'                => 'clusterConfig',
        'componentConfigs'             => 'componentConfigs',
        'foundationReferenceConfigs'   => 'foundationReferenceConfigs',
        'foundationVersionUID'         => 'foundationVersionUID',
        'originFoundationReferenceUID' => 'originFoundationReferenceUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfig) {
            $res['clusterConfig'] = $this->clusterConfig;
        }
        if (null !== $this->componentConfigs) {
            $res['componentConfigs'] = [];
            if (null !== $this->componentConfigs && \is_array($this->componentConfigs)) {
                $n = 0;
                foreach ($this->componentConfigs as $item) {
                    $res['componentConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->foundationReferenceConfigs) {
            $res['foundationReferenceConfigs'] = [];
            if (null !== $this->foundationReferenceConfigs && \is_array($this->foundationReferenceConfigs)) {
                $n = 0;
                foreach ($this->foundationReferenceConfigs as $item) {
                    $res['foundationReferenceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->originFoundationReferenceUID) {
            $res['originFoundationReferenceUID'] = $this->originFoundationReferenceUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFoundationReferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterConfig'])) {
            $model->clusterConfig = $map['clusterConfig'];
        }
        if (isset($map['componentConfigs'])) {
            if (!empty($map['componentConfigs'])) {
                $model->componentConfigs = [];
                $n                       = 0;
                foreach ($map['componentConfigs'] as $item) {
                    $model->componentConfigs[$n++] = null !== $item ? componentConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['foundationReferenceConfigs'])) {
            if (!empty($map['foundationReferenceConfigs'])) {
                $model->foundationReferenceConfigs = [];
                $n                                 = 0;
                foreach ($map['foundationReferenceConfigs'] as $item) {
                    $model->foundationReferenceConfigs[$n++] = null !== $item ? foundationReferenceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['originFoundationReferenceUID'])) {
            $model->originFoundationReferenceUID = $map['originFoundationReferenceUID'];
        }

        return $model;
    }
}
