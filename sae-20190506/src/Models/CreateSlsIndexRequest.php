<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CreateSlsIndexRequest extends Model
{
    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'logstore' => 'logstore',
        'project' => 'project',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
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
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
