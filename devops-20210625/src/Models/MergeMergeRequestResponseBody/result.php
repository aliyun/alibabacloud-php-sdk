<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\MergeMergeRequestResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bizId;
    /**
     * @var int
     */
    public $localId;
    /**
     * @var string
     */
    public $mergedRevision;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'bizId'          => 'bizId',
        'localId'        => 'localId',
        'mergedRevision' => 'mergedRevision',
        'projectId'      => 'projectId',
        'result'         => 'result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }

        if (null !== $this->mergedRevision) {
            $res['mergedRevision'] = $this->mergedRevision;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
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
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }

        if (isset($map['mergedRevision'])) {
            $model->mergedRevision = $map['mergedRevision'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
