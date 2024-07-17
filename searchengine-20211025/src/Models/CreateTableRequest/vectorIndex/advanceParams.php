<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\vectorIndex;

use AlibabaCloud\Tea\Model;

class advanceParams extends Model
{
    /**
     * @description The index building parameters.
     *
     * @example {}
     *
     * @var string
     */
    public $buildIndexParams;

    /**
     * @description The threshold for linear building.
     *
     * @example 5000
     *
     * @var string
     */
    public $linearBuildThreshold;

    /**
     * @description The minimum number of retrieved candidate sets.
     *
     * @example 20000
     *
     * @var string
     */
    public $minScanDocCnt;

    /**
     * @description The index retrieval parameters.
     *
     * @example {}
     *
     * @var string
     */
    public $searchIndexParams;
    protected $_name = [
        'buildIndexParams'     => 'buildIndexParams',
        'linearBuildThreshold' => 'linearBuildThreshold',
        'minScanDocCnt'        => 'minScanDocCnt',
        'searchIndexParams'    => 'searchIndexParams',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return advanceParams
     */
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
