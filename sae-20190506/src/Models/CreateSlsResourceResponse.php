<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateSlsResourceResponse extends Model
{
    /**
     * @var string
     */
    public $logStore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logStore'  => 'logStore',
        'project'   => 'project',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['logStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlsResourceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logStore'])) {
            $model->logStore = $map['logStore'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
