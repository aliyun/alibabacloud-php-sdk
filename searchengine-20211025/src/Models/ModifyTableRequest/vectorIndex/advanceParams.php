<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest\vectorIndex;

use AlibabaCloud\Dara\Model;

class advanceParams extends Model
{
    /**
     * @var string
     */
    public $buildIndexParams;

    /**
     * @var string
     */
    public $linearBuildThreshold;

    /**
     * @var string
     */
    public $minScanDocCnt;

    /**
     * @var string
     */
    public $searchIndexParams;
    protected $_name = [
        'buildIndexParams' => 'buildIndexParams',
        'linearBuildThreshold' => 'linearBuildThreshold',
        'minScanDocCnt' => 'minScanDocCnt',
        'searchIndexParams' => 'searchIndexParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildIndexParams) {
            $res['buildIndexParams'] = $this->buildIndexParams;
        }

        if (null !== $this->linearBuildThreshold) {
            $res['linearBuildThreshold'] = $this->linearBuildThreshold;
        }

        if (null !== $this->minScanDocCnt) {
            $res['minScanDocCnt'] = $this->minScanDocCnt;
        }

        if (null !== $this->searchIndexParams) {
            $res['searchIndexParams'] = $this->searchIndexParams;
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
        if (isset($map['buildIndexParams'])) {
            $model->buildIndexParams = $map['buildIndexParams'];
        }

        if (isset($map['linearBuildThreshold'])) {
            $model->linearBuildThreshold = $map['linearBuildThreshold'];
        }

        if (isset($map['minScanDocCnt'])) {
            $model->minScanDocCnt = $map['minScanDocCnt'];
        }

        if (isset($map['searchIndexParams'])) {
            $model->searchIndexParams = $map['searchIndexParams'];
        }

        return $model;
    }
}
