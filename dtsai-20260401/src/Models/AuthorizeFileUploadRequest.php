<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeFileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $batchSize;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'agentName' => 'AgentName',
        'batchSize' => 'BatchSize',
        'fileFormat' => 'FileFormat',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
