<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentVoiceprintsResponseBody\voiceprints;

class ListAIAgentVoiceprintsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var voiceprints[]
     */
    public $voiceprints;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'voiceprints' => 'Voiceprints',
    ];

    public function validate()
    {
        if (\is_array($this->voiceprints)) {
            Model::validateArray($this->voiceprints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->voiceprints) {
            if (\is_array($this->voiceprints)) {
                $res['Voiceprints'] = [];
                $n1 = 0;
                foreach ($this->voiceprints as $item1) {
                    $res['Voiceprints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Voiceprints'])) {
            if (!empty($map['Voiceprints'])) {
                $model->voiceprints = [];
                $n1 = 0;
                foreach ($map['Voiceprints'] as $item1) {
                    $model->voiceprints[$n1] = voiceprints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
