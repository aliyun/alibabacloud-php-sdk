<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewIndexResponseBody;

use AlibabaCloud\SDK\Sls\V20201230\Models\Index;
use AlibabaCloud\Tea\Model;

class indexes extends Model
{
    /**
     * @var Index
     */
    public $index;

    /**
     * @example my-logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @example example-project
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'index'    => 'index',
        'logstore' => 'logstore',
        'project'  => 'project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = null !== $this->index ? $this->index->toMap() : null;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexes
     */
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
