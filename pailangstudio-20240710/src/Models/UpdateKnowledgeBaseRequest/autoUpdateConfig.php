<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest\autoUpdateConfig\ecsSpecs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest\autoUpdateConfig\embeddingConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UserVpc;

class autoUpdateConfig extends Model
{
    /**
     * @var ecsSpecs[]
     */
    public $ecsSpecs;

    /**
     * @var embeddingConfig
     */
    public $embeddingConfig;

    /**
     * @var int
     */
    public $maxRunningTimeInSeconds;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'ecsSpecs' => 'EcsSpecs',
        'embeddingConfig' => 'EmbeddingConfig',
        'maxRunningTimeInSeconds' => 'MaxRunningTimeInSeconds',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
        'userVpc' => 'UserVpc',
    ];

    public function validate()
    {
        if (\is_array($this->ecsSpecs)) {
            Model::validateArray($this->ecsSpecs);
        }
        if (null !== $this->embeddingConfig) {
            $this->embeddingConfig->validate();
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsSpecs) {
            if (\is_array($this->ecsSpecs)) {
                $res['EcsSpecs'] = [];
                $n1 = 0;
                foreach ($this->ecsSpecs as $item1) {
                    $res['EcsSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->embeddingConfig) {
            $res['EmbeddingConfig'] = null !== $this->embeddingConfig ? $this->embeddingConfig->toArray($noStream) : $this->embeddingConfig;
        }

        if (null !== $this->maxRunningTimeInSeconds) {
            $res['MaxRunningTimeInSeconds'] = $this->maxRunningTimeInSeconds;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
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
        if (isset($map['EcsSpecs'])) {
            if (!empty($map['EcsSpecs'])) {
                $model->ecsSpecs = [];
                $n1 = 0;
                foreach ($map['EcsSpecs'] as $item1) {
                    $model->ecsSpecs[$n1] = ecsSpecs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EmbeddingConfig'])) {
            $model->embeddingConfig = embeddingConfig::fromMap($map['EmbeddingConfig']);
        }

        if (isset($map['MaxRunningTimeInSeconds'])) {
            $model->maxRunningTimeInSeconds = $map['MaxRunningTimeInSeconds'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        return $model;
    }
}
