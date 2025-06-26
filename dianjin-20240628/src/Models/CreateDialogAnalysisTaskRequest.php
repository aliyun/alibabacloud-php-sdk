<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest\conversationList;

class CreateDialogAnalysisTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $analysisNodes;

    /**
     * @var conversationList[]
     */
    public $conversationList;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $playCode;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'analysisNodes' => 'analysisNodes',
        'conversationList' => 'conversationList',
        'metaData' => 'metaData',
        'playCode' => 'playCode',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->analysisNodes)) {
            Model::validateArray($this->analysisNodes);
        }
        if (\is_array($this->conversationList)) {
            Model::validateArray($this->conversationList);
        }
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisNodes) {
            if (\is_array($this->analysisNodes)) {
                $res['analysisNodes'] = [];
                $n1 = 0;
                foreach ($this->analysisNodes as $item1) {
                    $res['analysisNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->conversationList) {
            if (\is_array($this->conversationList)) {
                $res['conversationList'] = [];
                $n1 = 0;
                foreach ($this->conversationList as $item1) {
                    $res['conversationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['metaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['metaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->playCode) {
            $res['playCode'] = $this->playCode;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['analysisNodes'])) {
            if (!empty($map['analysisNodes'])) {
                $model->analysisNodes = [];
                $n1 = 0;
                foreach ($map['analysisNodes'] as $item1) {
                    $model->analysisNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['conversationList'])) {
            if (!empty($map['conversationList'])) {
                $model->conversationList = [];
                $n1 = 0;
                foreach ($map['conversationList'] as $item1) {
                    $model->conversationList[$n1] = conversationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metaData'])) {
            if (!empty($map['metaData'])) {
                $model->metaData = [];
                foreach ($map['metaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['playCode'])) {
            $model->playCode = $map['playCode'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
