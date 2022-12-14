<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SearchFaceAdvanceRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example test1,test2,test3
     *
     * @var string
     */
    public $dbNames;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/SearchFace/SearchFace1.png
     *
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @example 2
     *
     * @var int
     */
    public $limit;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxFaceNum;

    /**
     * @example 50.0
     *
     * @var float
     */
    public $qualityScoreThreshold;
    protected $_name = [
        'dbName'                => 'DbName',
        'dbNames'               => 'DbNames',
        'imageUrlObject'        => 'ImageUrl',
        'limit'                 => 'Limit',
        'maxFaceNum'            => 'MaxFaceNum',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->maxFaceNum) {
            $res['MaxFaceNum'] = $this->maxFaceNum;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MaxFaceNum'])) {
            $model->maxFaceNum = $map['MaxFaceNum'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }

        return $model;
    }
}
