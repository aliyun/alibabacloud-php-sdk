<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoResponseBody;

use AlibabaCloud\Dara\Model;

class auditInfo extends Model
{
    /**
     * @var string
     */
    public $logStore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'logStore' => 'LogStore',
        'project' => 'Project',
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

        if (null !== $this->project) {
            $res['Project'] = $this->project;
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

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
