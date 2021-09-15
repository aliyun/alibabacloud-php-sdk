<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SearchFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @var string
     */
    public $dbName;

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
    protected $_name = [
        'imageUrlObject'        => 'ImageUrlObject',
        'dbName'                => 'DbName',
        'limit'                 => 'Limit',
        'dbNames'               => 'DbNames',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrlObject) {
            $res['ImageUrlObject'] = $this->imageUrlObject;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
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
        if (isset($map['ImageUrlObject'])) {
            $model->imageUrlObject = $map['ImageUrlObject'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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

        return $model;
    }
}
