<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateAndAttachPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $attachResourceIds;

    /**
     * @var string
     */
    public $attachResourceType;

    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'attachResourceIds' => 'attachResourceIds',
        'attachResourceType' => 'attachResourceType',
        'className' => 'className',
        'config' => 'config',
        'description' => 'description',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->attachResourceIds)) {
            Model::validateArray($this->attachResourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResourceIds) {
            if (\is_array($this->attachResourceIds)) {
                $res['attachResourceIds'] = [];
                $n1 = 0;
                foreach ($this->attachResourceIds as $item1) {
                    $res['attachResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }

        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['attachResourceIds'])) {
            if (!empty($map['attachResourceIds'])) {
                $model->attachResourceIds = [];
                $n1 = 0;
                foreach ($map['attachResourceIds'] as $item1) {
                    $model->attachResourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }

        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
