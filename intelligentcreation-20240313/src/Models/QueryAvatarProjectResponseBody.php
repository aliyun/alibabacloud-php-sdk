<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody\frames;

class QueryAvatarProjectResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @var string
     */
    public $projectName;

    /**
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
     * @var string
     */
    public $scriptModelTag;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentId' => 'agentId',
        'errorMsg' => 'errorMsg',
        'frames' => 'frames',
        'projectName' => 'projectName',
        'requestId' => 'requestId',
        'resSpecType' => 'resSpecType',
        'scaleType' => 'scaleType',
        'scriptModelTag' => 'scriptModelTag',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->frames) {
            if (\is_array($this->frames)) {
                $res['frames'] = [];
                $n1 = 0;
                foreach ($this->frames as $item1) {
                    $res['frames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->scriptModelTag) {
            $res['scriptModelTag'] = $this->scriptModelTag;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['frames'])) {
            if (!empty($map['frames'])) {
                $model->frames = [];
                $n1 = 0;
                foreach ($map['frames'] as $item1) {
                    $model->frames[$n1++] = frames::fromMap($item1);
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

        if (isset($map['scriptModelTag'])) {
            $model->scriptModelTag = $map['scriptModelTag'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
