<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunDialogAnalysisResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunDialogAnalysisResponseBody\data\dialogAnalysisRespList\analysisResp;

class dialogAnalysisRespList extends Model
{
    /**
     * @var analysisResp
     */
    public $analysisResp;

    /**
     * @var string[]
     */
    public $failNode;

    /**
     * @var string
     */
    public $gmtCreate;

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
        'failNode' => 'failNode',
        'gmtCreate' => 'gmtCreate',
        'sessionId' => 'sessionId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->analysisResp) {
            $this->analysisResp->validate();
        }
        if (\is_array($this->failNode)) {
            Model::validateArray($this->failNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisResp) {
            $res['analysisResp'] = null !== $this->analysisResp ? $this->analysisResp->toArray($noStream) : $this->analysisResp;
        }

        if (null !== $this->failNode) {
            if (\is_array($this->failNode)) {
                $res['failNode'] = [];
                $n1 = 0;
                foreach ($this->failNode as $item1) {
                    $res['failNode'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
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

        if (isset($map['failNode'])) {
            if (!empty($map['failNode'])) {
                $model->failNode = [];
                $n1 = 0;
                foreach ($map['failNode'] as $item1) {
                    $model->failNode[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
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
