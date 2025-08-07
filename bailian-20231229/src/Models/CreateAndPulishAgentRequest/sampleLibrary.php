<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentRequest;

use AlibabaCloud\Dara\Model;

class sampleLibrary extends Model
{
    /**
     * @var bool
     */
    public $enableSample;

    /**
     * @var string[]
     */
    public $sampleLibraryIdList;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'enableSample' => 'enableSample',
        'sampleLibraryIdList' => 'sampleLibraryIdList',
        'topK' => 'topK',
    ];

    public function validate()
    {
        if (\is_array($this->sampleLibraryIdList)) {
            Model::validateArray($this->sampleLibraryIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSample) {
            $res['enableSample'] = $this->enableSample;
        }

        if (null !== $this->sampleLibraryIdList) {
            if (\is_array($this->sampleLibraryIdList)) {
                $res['sampleLibraryIdList'] = [];
                $n1 = 0;
                foreach ($this->sampleLibraryIdList as $item1) {
                    $res['sampleLibraryIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
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
        if (isset($map['enableSample'])) {
            $model->enableSample = $map['enableSample'];
        }

        if (isset($map['sampleLibraryIdList'])) {
            if (!empty($map['sampleLibraryIdList'])) {
                $model->sampleLibraryIdList = [];
                $n1 = 0;
                foreach ($map['sampleLibraryIdList'] as $item1) {
                    $model->sampleLibraryIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
