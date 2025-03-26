<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisRequest\sqlData;

class RunDataResultAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $analysisMode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sqlData
     */
    public $sqlData;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'analysisMode' => 'analysisMode',
        'requestId' => 'requestId',
        'sqlData' => 'sqlData',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->sqlData) {
            $this->sqlData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisMode) {
            $res['analysisMode'] = $this->analysisMode;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sqlData) {
            $res['sqlData'] = null !== $this->sqlData ? $this->sqlData->toArray($noStream) : $this->sqlData;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['analysisMode'])) {
            $model->analysisMode = $map['analysisMode'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sqlData'])) {
            $model->sqlData = sqlData::fromMap($map['sqlData']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
