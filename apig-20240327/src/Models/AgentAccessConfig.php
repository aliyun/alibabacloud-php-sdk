<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentAccessConfig\authorization;

class AgentAccessConfig extends Model
{
    /**
     * @var bool
     */
    public $aiRequestLogEnabled;

    /**
     * @var authorization
     */
    public $authorization;

    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var bool
     */
    public $removeBasePathOnForward;
    protected $_name = [
        'aiRequestLogEnabled' => 'aiRequestLogEnabled',
        'authorization' => 'authorization',
        'basePath' => 'basePath',
        'domainIds' => 'domainIds',
        'removeBasePathOnForward' => 'removeBasePathOnForward',
    ];

    public function validate()
    {
        if (null !== $this->authorization) {
            $this->authorization->validate();
        }
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiRequestLogEnabled) {
            $res['aiRequestLogEnabled'] = $this->aiRequestLogEnabled;
        }

        if (null !== $this->authorization) {
            $res['authorization'] = null !== $this->authorization ? $this->authorization->toArray($noStream) : $this->authorization;
        }

        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }

        if (null !== $this->domainIds) {
            if (\is_array($this->domainIds)) {
                $res['domainIds'] = [];
                $n1 = 0;
                foreach ($this->domainIds as $item1) {
                    $res['domainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->removeBasePathOnForward) {
            $res['removeBasePathOnForward'] = $this->removeBasePathOnForward;
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
        if (isset($map['aiRequestLogEnabled'])) {
            $model->aiRequestLogEnabled = $map['aiRequestLogEnabled'];
        }

        if (isset($map['authorization'])) {
            $model->authorization = authorization::fromMap($map['authorization']);
        }

        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }

        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = [];
                $n1 = 0;
                foreach ($map['domainIds'] as $item1) {
                    $model->domainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['removeBasePathOnForward'])) {
            $model->removeBasePathOnForward = $map['removeBasePathOnForward'];
        }

        return $model;
    }
}
