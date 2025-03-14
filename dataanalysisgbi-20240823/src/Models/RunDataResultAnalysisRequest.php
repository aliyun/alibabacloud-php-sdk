<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisRequest\sqlData;
use AlibabaCloud\Tea\Model;

class RunDataResultAnalysisRequest extends Model
{
    /**
     * @example all
     *
     * @var string
     */
    public $analysisMode;

    /**
     * @description This parameter is required.
     *
     * @example FF76AD3F-8B32-567E-819B-0D3738917006
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sqlData
     */
    public $sqlData;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'analysisMode' => 'analysisMode',
        'requestId' => 'requestId',
        'sqlData' => 'sqlData',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisMode) {
            $res['analysisMode'] = $this->analysisMode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sqlData) {
            $res['sqlData'] = null !== $this->sqlData ? $this->sqlData->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunDataResultAnalysisRequest
     */
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
