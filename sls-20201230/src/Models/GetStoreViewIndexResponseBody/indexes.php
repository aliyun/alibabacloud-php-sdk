<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewIndexResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\Index;

class indexes extends Model
{
    /**
     * @var Index
     */
    public $index;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'index' => 'index',
        'logstore' => 'logstore',
        'project' => 'project',
    ];

    public function validate()
    {
        if (null !== $this->index) {
            $this->index->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = null !== $this->index ? $this->index->toArray($noStream) : $this->index;
        }

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
        if (isset($map['index'])) {
            $model->index = Index::fromMap($map['index']);
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
