<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SearchFaceRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $dbNames;

    /**
     * @var float
     */
    public $qualityScoreThreshold;

    /**
     * @var int
     */
    public $maxFaceNum;
    protected $_name = [
        'dbName'                => 'DbName',
        'imageUrl'              => 'ImageUrl',
        'limit'                 => 'Limit',
        'dbNames'               => 'DbNames',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
        'maxFaceNum'            => 'MaxFaceNum',
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
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }
        if (null !== $this->maxFaceNum) {
            $res['MaxFaceNum'] = $this->maxFaceNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }
        if (isset($map['MaxFaceNum'])) {
            $model->maxFaceNum = $map['MaxFaceNum'];
        }

        return $model;
    }
}
