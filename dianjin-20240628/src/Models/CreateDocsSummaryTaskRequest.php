<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskRequest\docInfos;

class CreateDocsSummaryTaskRequest extends Model
{
    /**
     * @var docInfos[]
     */
    public $docInfos;
    /**
     * @var bool
     */
    public $enableTable;
    /**
     * @var string
     */
    public $instruction;
    /**
     * @var string
     */
    public $modelId;
    protected $_name = [
        'docInfos'    => 'docInfos',
        'enableTable' => 'enableTable',
        'instruction' => 'instruction',
        'modelId'     => 'modelId',
    ];

    public function validate()
    {
        if (\is_array($this->docInfos)) {
            Model::validateArray($this->docInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docInfos) {
            if (\is_array($this->docInfos)) {
                $res['docInfos'] = [];
                $n1              = 0;
                foreach ($this->docInfos as $item1) {
                    $res['docInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enableTable) {
            $res['enableTable'] = $this->enableTable;
        }

        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
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
        if (isset($map['docInfos'])) {
            if (!empty($map['docInfos'])) {
                $model->docInfos = [];
                $n1              = 0;
                foreach ($map['docInfos'] as $item1) {
                    $model->docInfos[$n1++] = docInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['enableTable'])) {
            $model->enableTable = $map['enableTable'];
        }

        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
