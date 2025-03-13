<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody\frames;
use AlibabaCloud\Tea\Model;

class QueryAvatarProjectResponseBody extends Model
{
    /**
     * @example 1000222
     *
     * @var string
     */
    public $agentId;

    /**
     * @example error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @example doc_test_3
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 2C331582-7390-5949-8D9A-AC8239185B37
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resSpecType;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @example DEPLOYING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'agentId'     => 'agentId',
        'errorMsg'    => 'errorMsg',
        'frames'      => 'frames',
        'projectName' => 'projectName',
        'requestId'   => 'requestId',
        'resSpecType' => 'resSpecType',
        'scaleType'   => 'scaleType',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->frames) {
            $res['frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resSpecType) {
            $res['resSpecType'] = $this->resSpecType;
        }
        if (null !== $this->scaleType) {
            $res['scaleType'] = $this->scaleType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAvatarProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['frames'])) {
            if (!empty($map['frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resSpecType'])) {
            $model->resSpecType = $map['resSpecType'];
        }
        if (isset($map['scaleType'])) {
            $model->scaleType = $map['scaleType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
