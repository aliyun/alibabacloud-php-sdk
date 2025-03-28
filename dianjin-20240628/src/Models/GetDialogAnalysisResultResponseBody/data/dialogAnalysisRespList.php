<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList\analysisResp;

class dialogAnalysisRespList extends Model
{
    /**
     * @var analysisResp
     */
    public $analysisResp;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'analysisResp' => 'analysisResp',
        'gmtCreate' => 'gmtCreate',
        'ossUrl' => 'ossUrl',
        'sessionId' => 'sessionId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->analysisResp) {
            $this->analysisResp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisResp) {
            $res['analysisResp'] = null !== $this->analysisResp ? $this->analysisResp->toArray($noStream) : $this->analysisResp;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
