<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\CreateCpfsAccessPointRequest;

use AlibabaCloud\Dara\Model;

class rootDirectory extends Model
{
    /**
     * @var string
     */
    public $rootPath;
    protected $_name = [
        'rootPath' => 'RootPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rootPath) {
            $res['RootPath'] = $this->rootPath;
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
        if (isset($map['RootPath'])) {
            $model->rootPath = $map['RootPath'];
        }

        return $model;
    }
}
