<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest\deleteOptions;

class DeleteClusterRequest extends Model
{
    /**
     * @var deleteOptions[]
     */
    public $deleteOptions;

    /**
     * @var bool
     */
    public $keepSlb;

    /**
     * @var bool
     */
    public $retainAllResources;

    /**
     * @var string[]
     */
    public $retainResources;
    protected $_name = [
        'deleteOptions' => 'delete_options',
        'keepSlb' => 'keep_slb',
        'retainAllResources' => 'retain_all_resources',
        'retainResources' => 'retain_resources',
    ];

    public function validate()
    {
        if (\is_array($this->deleteOptions)) {
            Model::validateArray($this->deleteOptions);
        }
        if (\is_array($this->retainResources)) {
            Model::validateArray($this->retainResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteOptions) {
            if (\is_array($this->deleteOptions)) {
                $res['delete_options'] = [];
                $n1 = 0;
                foreach ($this->deleteOptions as $item1) {
                    $res['delete_options'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->keepSlb) {
            $res['keep_slb'] = $this->keepSlb;
        }

        if (null !== $this->retainAllResources) {
            $res['retain_all_resources'] = $this->retainAllResources;
        }

        if (null !== $this->retainResources) {
            if (\is_array($this->retainResources)) {
                $res['retain_resources'] = [];
                $n1 = 0;
                foreach ($this->retainResources as $item1) {
                    $res['retain_resources'][$n1++] = $item1;
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
        if (isset($map['delete_options'])) {
            if (!empty($map['delete_options'])) {
                $model->deleteOptions = [];
                $n1 = 0;
                foreach ($map['delete_options'] as $item1) {
                    $model->deleteOptions[$n1++] = deleteOptions::fromMap($item1);
                }
            }
        }

        if (isset($map['keep_slb'])) {
            $model->keepSlb = $map['keep_slb'];
        }

        if (isset($map['retain_all_resources'])) {
            $model->retainAllResources = $map['retain_all_resources'];
        }

        if (isset($map['retain_resources'])) {
            if (!empty($map['retain_resources'])) {
                $model->retainResources = [];
                $n1 = 0;
                foreach ($map['retain_resources'] as $item1) {
                    $model->retainResources[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
