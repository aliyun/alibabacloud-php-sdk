<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponseBody\data\assistScripts;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponseBody\data\assistSop;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponseBody\data\conversationModel;

class data extends Model
{
    /**
     * @var string
     */
    public $analysisProcess;

    /**
     * @var assistScripts[]
     */
    public $assistScripts;

    /**
     * @var assistSop[]
     */
    public $assistSop;

    /**
     * @var conversationModel[]
     */
    public $conversationModel;

    /**
     * @var bool
     */
    public $interrupt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'analysisProcess' => 'analysisProcess',
        'assistScripts' => 'assistScripts',
        'assistSop' => 'assistSop',
        'conversationModel' => 'conversationModel',
        'interrupt' => 'interrupt',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        if (\is_array($this->assistScripts)) {
            Model::validateArray($this->assistScripts);
        }
        if (\is_array($this->assistSop)) {
            Model::validateArray($this->assistSop);
        }
        if (\is_array($this->conversationModel)) {
            Model::validateArray($this->conversationModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisProcess) {
            $res['analysisProcess'] = $this->analysisProcess;
        }

        if (null !== $this->assistScripts) {
            if (\is_array($this->assistScripts)) {
                $res['assistScripts'] = [];
                $n1 = 0;
                foreach ($this->assistScripts as $item1) {
                    $res['assistScripts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->assistSop) {
            if (\is_array($this->assistSop)) {
                $res['assistSop'] = [];
                $n1 = 0;
                foreach ($this->assistSop as $item1) {
                    $res['assistSop'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->conversationModel) {
            if (\is_array($this->conversationModel)) {
                $res['conversationModel'] = [];
                $n1 = 0;
                foreach ($this->conversationModel as $item1) {
                    $res['conversationModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->interrupt) {
            $res['interrupt'] = $this->interrupt;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['analysisProcess'])) {
            $model->analysisProcess = $map['analysisProcess'];
        }

        if (isset($map['assistScripts'])) {
            if (!empty($map['assistScripts'])) {
                $model->assistScripts = [];
                $n1 = 0;
                foreach ($map['assistScripts'] as $item1) {
                    $model->assistScripts[$n1] = assistScripts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['assistSop'])) {
            if (!empty($map['assistSop'])) {
                $model->assistSop = [];
                $n1 = 0;
                foreach ($map['assistSop'] as $item1) {
                    $model->assistSop[$n1] = assistSop::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['conversationModel'])) {
            if (!empty($map['conversationModel'])) {
                $model->conversationModel = [];
                $n1 = 0;
                foreach ($map['conversationModel'] as $item1) {
                    $model->conversationModel[$n1] = conversationModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['interrupt'])) {
            $model->interrupt = $map['interrupt'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
