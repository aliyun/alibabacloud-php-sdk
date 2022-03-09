<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ProjectFindUploadsRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var bool
     */
    public $createdByCurrentUser;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var bool
     */
    public $live;
    protected $_name = [
        'aliyunJwt'            => 'AliyunJwt',
        'createdByCurrentUser' => 'CreatedByCurrentUser',
        'datasetId'            => 'DatasetId',
        'live'                 => 'Live',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->createdByCurrentUser) {
            $res['CreatedByCurrentUser'] = $this->createdByCurrentUser;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->live) {
            $res['Live'] = $this->live;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectFindUploadsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['CreatedByCurrentUser'])) {
            $model->createdByCurrentUser = $map['CreatedByCurrentUser'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Live'])) {
            $model->live = $map['Live'];
        }

        return $model;
    }
}
