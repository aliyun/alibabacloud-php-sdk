<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class PolicyInfo extends Model
{
    /**
     * @var Attachment[]
     */
    public $attachments;

    /**
     * @var string
     */
    public $classAlias;

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
    public $direction;

    /**
     * @var string
     */
    public $executePriority;

    /**
     * @var string
     */
    public $executeStage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attachments'     => 'attachments',
        'classAlias'      => 'classAlias',
        'className'       => 'className',
        'config'          => 'config',
        'direction'       => 'direction',
        'executePriority' => 'executePriority',
        'executeStage'    => 'executeStage',
        'name'            => 'name',
        'policyId'        => 'policyId',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachments) {
            $res['attachments'] = [];
            if (null !== $this->attachments && \is_array($this->attachments)) {
                $n = 0;
                foreach ($this->attachments as $item) {
                    $res['attachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->classAlias) {
            $res['classAlias'] = $this->classAlias;
        }
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->executePriority) {
            $res['executePriority'] = $this->executePriority;
        }
        if (null !== $this->executeStage) {
            $res['executeStage'] = $this->executeStage;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PolicyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n                  = 0;
                foreach ($map['attachments'] as $item) {
                    $model->attachments[$n++] = null !== $item ? Attachment::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['classAlias'])) {
            $model->classAlias = $map['classAlias'];
        }
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['executePriority'])) {
            $model->executePriority = $map['executePriority'];
        }
        if (isset($map['executeStage'])) {
            $model->executeStage = $map['executeStage'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
