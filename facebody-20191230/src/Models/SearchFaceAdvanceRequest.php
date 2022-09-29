<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SearchFaceAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbNames;

    /**
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $maxFaceNum;

    /**
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
