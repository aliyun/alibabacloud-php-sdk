<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'resourceCount' => 'resourceCount',
        'resourceTypes' => 'resourceTypes',
        'templateCode' => 'templateCode',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceCount) {
            $res['resourceCount'] = $this->resourceCount;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['resourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['resourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceCount'])) {
            $model->resourceCount = $map['resourceCount'];
        }

        if (isset($map['resourceTypes'])) {
            if (!empty($map['resourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['resourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        return $model;
    }
}
