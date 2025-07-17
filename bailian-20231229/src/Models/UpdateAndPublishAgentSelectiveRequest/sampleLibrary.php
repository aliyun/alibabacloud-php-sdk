<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSample) {
            $res['enableSample'] = $this->enableSample;
        }
        if (null !== $this->sampleLibraryIdList) {
            $res['sampleLibraryIdList'] = $this->sampleLibraryIdList;
        }
        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sampleLibrary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableSample'])) {
            $model->enableSample = $map['enableSample'];
        }
        if (isset($map['sampleLibraryIdList'])) {
            if (!empty($map['sampleLibraryIdList'])) {
                $model->sampleLibraryIdList = $map['sampleLibraryIdList'];
            }
        }
        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
