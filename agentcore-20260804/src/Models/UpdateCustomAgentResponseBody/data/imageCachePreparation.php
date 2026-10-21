<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class imageCachePreparation extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $statusAtAcceptance;

    /**
     * @var string
     */
    public $submissionStatus;
    protected $_name = [
        'imageId' => 'imageId',
        'statusAtAcceptance' => 'statusAtAcceptance',
        'submissionStatus' => 'submissionStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }

        if (null !== $this->statusAtAcceptance) {
            $res['statusAtAcceptance'] = $this->statusAtAcceptance;
        }

        if (null !== $this->submissionStatus) {
            $res['submissionStatus'] = $this->submissionStatus;
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
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        if (isset($map['statusAtAcceptance'])) {
            $model->statusAtAcceptance = $map['statusAtAcceptance'];
        }

        if (isset($map['submissionStatus'])) {
            $model->submissionStatus = $map['submissionStatus'];
        }

        return $model;
    }
}
