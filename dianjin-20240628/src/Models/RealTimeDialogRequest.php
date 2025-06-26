<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogRequest\conversationModel;

class RealTimeDialogRequest extends Model
{
    /**
     * @var bool
     */
    public $analysis;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var conversationModel[]
     */
    public $conversationModel;

    /**
     * @var int
     */
    public $dialogMemoryTurns;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $opType;

    /**
     * @var bool
     */
    public $recommend;

    /**
     * @var string
     */
    public $scriptContentPlayed;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var bool
     */
    public $userVad;
    protected $_name = [
        'analysis' => 'analysis',
        'bizType' => 'bizType',
        'conversationModel' => 'conversationModel',
        'dialogMemoryTurns' => 'dialogMemoryTurns',
        'metaData' => 'metaData',
        'opType' => 'opType',
        'recommend' => 'recommend',
        'scriptContentPlayed' => 'scriptContentPlayed',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'userVad' => 'userVad',
    ];

    public function validate()
    {
        if (\is_array($this->conversationModel)) {
            Model::validateArray($this->conversationModel);
        }
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['analysis'] = $this->analysis;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
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

        if (null !== $this->dialogMemoryTurns) {
            $res['dialogMemoryTurns'] = $this->dialogMemoryTurns;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['metaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['metaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->opType) {
            $res['opType'] = $this->opType;
        }

        if (null !== $this->recommend) {
            $res['recommend'] = $this->recommend;
        }

        if (null !== $this->scriptContentPlayed) {
            $res['scriptContentPlayed'] = $this->scriptContentPlayed;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->userVad) {
            $res['userVad'] = $this->userVad;
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
        if (isset($map['analysis'])) {
            $model->analysis = $map['analysis'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
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

        if (isset($map['dialogMemoryTurns'])) {
            $model->dialogMemoryTurns = $map['dialogMemoryTurns'];
        }

        if (isset($map['metaData'])) {
            if (!empty($map['metaData'])) {
                $model->metaData = [];
                foreach ($map['metaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['opType'])) {
            $model->opType = $map['opType'];
        }

        if (isset($map['recommend'])) {
            $model->recommend = $map['recommend'];
        }

        if (isset($map['scriptContentPlayed'])) {
            $model->scriptContentPlayed = $map['scriptContentPlayed'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['userVad'])) {
            $model->userVad = $map['userVad'];
        }

        return $model;
    }
}
