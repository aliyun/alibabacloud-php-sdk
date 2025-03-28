<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\TemplateSpec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\RepositorySourceConfig;

class source extends Model
{
    /**
     * @var RepositorySourceConfig
     */
    public $repository;
    protected $_name = [
        'repository' => 'repository',
    ];

    public function validate()
    {
        if (null !== $this->repository) {
            $this->repository->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repository) {
            $res['repository'] = null !== $this->repository ? $this->repository->toArray($noStream) : $this->repository;
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
        if (isset($map['repository'])) {
            $model->repository = RepositorySourceConfig::fromMap($map['repository']);
        }

        return $model;
    }
}
