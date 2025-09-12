<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateResourceLogRequest extends Model
{
    /**
     * @var string
     */
    public $logStore;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'logStore' => 'LogStore',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
