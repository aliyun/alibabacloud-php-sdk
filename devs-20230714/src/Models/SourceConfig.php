<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class SourceConfig extends Model
{
    /**
     * @var OpenStructOssSourceConfig
     */
    public $oss;

    /**
     * @var RepositorySourceConfig
     */
    public $repository;

    /**
     * @var TemplateSourceConfig
     */
    public $template;
    protected $_name = [
        'oss' => 'oss',
        'repository' => 'repository',
        'template' => 'template',
    ];

    public function validate()
    {
        if (null !== $this->oss) {
            $this->oss->validate();
        }
        if (null !== $this->repository) {
            $this->repository->validate();
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oss) {
            $res['oss'] = null !== $this->oss ? $this->oss->toArray($noStream) : $this->oss;
        }

        if (null !== $this->repository) {
            $res['repository'] = null !== $this->repository ? $this->repository->toArray($noStream) : $this->repository;
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
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
        if (isset($map['oss'])) {
            $model->oss = OpenStructOssSourceConfig::fromMap($map['oss']);
        }

        if (isset($map['repository'])) {
            $model->repository = RepositorySourceConfig::fromMap($map['repository']);
        }

        if (isset($map['template'])) {
            $model->template = TemplateSourceConfig::fromMap($map['template']);
        }

        return $model;
    }
}
