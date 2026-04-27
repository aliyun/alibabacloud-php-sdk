<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteUnknownThreatDetectProcessRequest extends Model
{
    /**
     * @var string[]
     */
    public $processIdList;
    protected $_name = [
        'processIdList' => 'ProcessIdList',
    ];

    public function validate()
    {
        if (\is_array($this->processIdList)) {
            Model::validateArray($this->processIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processIdList) {
            if (\is_array($this->processIdList)) {
                $res['ProcessIdList'] = [];
                $n1 = 0;
                foreach ($this->processIdList as $item1) {
                    $res['ProcessIdList'][$n1] = $item1;
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
        if (isset($map['ProcessIdList'])) {
            if (!empty($map['ProcessIdList'])) {
                $model->processIdList = [];
                $n1 = 0;
                foreach ($map['ProcessIdList'] as $item1) {
                    $model->processIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
