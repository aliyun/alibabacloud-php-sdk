<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class RepositorySourceConfig extends Model
{
    /**
     * @var CodeVersionReference
     */
    public $codeVersion;

    /**
     * @var EventFilterConfig
     */
    public $filter;

    /**
     * @var string
     */
    public $repositoryName;
    protected $_name = [
        'codeVersion' => 'codeVersion',
        'filter' => 'filter',
        'repositoryName' => 'repositoryName',
    ];

    public function validate()
    {
        if (null !== $this->codeVersion) {
            $this->codeVersion->validate();
        }
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['codeVersion'] = null !== $this->codeVersion ? $this->codeVersion->toArray($noStream) : $this->codeVersion;
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->repositoryName) {
            $res['repositoryName'] = $this->repositoryName;
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
        if (isset($map['codeVersion'])) {
            $model->codeVersion = CodeVersionReference::fromMap($map['codeVersion']);
        }

        if (isset($map['filter'])) {
            $model->filter = EventFilterConfig::fromMap($map['filter']);
        }

        if (isset($map['repositoryName'])) {
            $model->repositoryName = $map['repositoryName'];
        }

        return $model;
    }
}
