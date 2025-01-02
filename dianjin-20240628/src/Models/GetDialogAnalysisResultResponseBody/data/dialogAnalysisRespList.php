<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList\analysisResp;
use AlibabaCloud\Tea\Model;

class dialogAnalysisRespList extends Model
{
    /**
     * @var analysisResp
     */
    public $analysisResp;

    /**
     * @example 2024-04-24 11:54:34
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example https://xxx.oss-cn-beijing.aliyuncs.com/dialog-analysis/2024-12-30/2/1826661605606129665
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @example 183764873624
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'analysisResp' => 'analysisResp',
        'gmtCreate'    => 'gmtCreate',
        'ossUrl'       => 'ossUrl',
        'sessionId'    => 'sessionId',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisResp) {
            $res['analysisResp'] = null !== $this->analysisResp ? $this->analysisResp->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->ossUrl) {
            $res['ossUrl'] = $this->ossUrl;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogAnalysisRespList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisResp'])) {
            $model->analysisResp = analysisResp::fromMap($map['analysisResp']);
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['ossUrl'])) {
            $model->ossUrl = $map['ossUrl'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
