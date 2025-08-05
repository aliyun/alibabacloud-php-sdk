<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

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
        'attachments' => 'attachments',
        'classAlias' => 'classAlias',
        'className' => 'className',
        'config' => 'config',
        'direction' => 'direction',
        'executePriority' => 'executePriority',
        'executeStage' => 'executeStage',
        'name' => 'name',
        'policyId' => 'policyId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['attachments'] as $item1) {
                    $model->attachments[$n1] = Attachment::fromMap($item1);
                    ++$n1;
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
