<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody\data\results\dimensionResults;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ModelUsage;

class results extends Model
{
    /**
     * @var string
     */
    public $customId;

    /**
     * @var dimensionResults[]
     */
    public $dimensionResults;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $overallComment;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $score;

    /**
     * @var ModelUsage
     */
    public $usage;
    protected $_name = [
        'customId' => 'customId',
        'dimensionResults' => 'dimensionResults',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'overallComment' => 'overallComment',
        'result' => 'result',
        'score' => 'score',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->dimensionResults)) {
            Model::validateArray($this->dimensionResults);
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customId) {
            $res['customId'] = $this->customId;
        }

        if (null !== $this->dimensionResults) {
            if (\is_array($this->dimensionResults)) {
                $res['dimensionResults'] = [];
                $n1 = 0;
                foreach ($this->dimensionResults as $item1) {
                    $res['dimensionResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->overallComment) {
            $res['overallComment'] = $this->overallComment;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['customId'])) {
            $model->customId = $map['customId'];
        }

        if (isset($map['dimensionResults'])) {
            if (!empty($map['dimensionResults'])) {
                $model->dimensionResults = [];
                $n1 = 0;
                foreach ($map['dimensionResults'] as $item1) {
                    $model->dimensionResults[$n1] = dimensionResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['overallComment'])) {
            $model->overallComment = $map['overallComment'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['usage'])) {
            $model->usage = ModelUsage::fromMap($map['usage']);
        }

        return $model;
    }
}
