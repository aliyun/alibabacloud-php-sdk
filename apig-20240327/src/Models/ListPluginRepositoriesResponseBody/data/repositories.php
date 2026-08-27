<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginRepositoriesResponseBody\data;

use AlibabaCloud\Dara\Model;

class repositories extends Model
{
    /**
     * @var string
     */
    public $repositoryId;

    /**
     * @var string
     */
    public $repositoryName;
    protected $_name = [
        'repositoryId' => 'repositoryId',
        'repositoryName' => 'repositoryName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repositoryId) {
            $res['repositoryId'] = $this->repositoryId;
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
        if (isset($map['repositoryId'])) {
            $model->repositoryId = $map['repositoryId'];
        }

        if (isset($map['repositoryName'])) {
            $model->repositoryName = $map['repositoryName'];
        }

        return $model;
    }
}
