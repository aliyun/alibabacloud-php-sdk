<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\polarClawApplicationAttribute;

use AlibabaCloud\Dara\Model;

class langfuseBinding extends Model
{
    /**
     * @var int
     */
    public $activatedAt;

    /**
     * @var string
     */
    public $apiKeyId;

    /**
     * @var int
     */
    public $bindingTaskId;

    /**
     * @var string
     */
    public $langfuseApplicationId;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'activatedAt' => 'ActivatedAt',
        'apiKeyId' => 'ApiKeyId',
        'bindingTaskId' => 'BindingTaskId',
        'langfuseApplicationId' => 'LangfuseApplicationId',
        'phase' => 'Phase',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activatedAt) {
            $res['ActivatedAt'] = $this->activatedAt;
        }

        if (null !== $this->apiKeyId) {
            $res['ApiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->bindingTaskId) {
            $res['BindingTaskId'] = $this->bindingTaskId;
        }

        if (null !== $this->langfuseApplicationId) {
            $res['LangfuseApplicationId'] = $this->langfuseApplicationId;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ActivatedAt'])) {
            $model->activatedAt = $map['ActivatedAt'];
        }

        if (isset($map['ApiKeyId'])) {
            $model->apiKeyId = $map['ApiKeyId'];
        }

        if (isset($map['BindingTaskId'])) {
            $model->bindingTaskId = $map['BindingTaskId'];
        }

        if (isset($map['LangfuseApplicationId'])) {
            $model->langfuseApplicationId = $map['LangfuseApplicationId'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
