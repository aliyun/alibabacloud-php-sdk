<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetTitleIntelligenceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 111
     *
     * @var int
     */
    public $catLevelThreeId;

    /**
     * @description This parameter is required.
     *
     * @example 222
     *
     * @var int
     */
    public $catLevelTwoId;

    /**
     * @example {"product_id":"1212"}
     *
     * @var string
     */
    public $extra;

    /**
     * @example hello,apple
     *
     * @var string
     */
    public $keywords;

    /**
     * @description This parameter is required.
     *
     * @example ae
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'catLevelThreeId' => 'CatLevelThreeId',
        'catLevelTwoId'   => 'CatLevelTwoId',
        'extra'           => 'Extra',
        'keywords'        => 'Keywords',
        'platform'        => 'Platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catLevelThreeId) {
            $res['CatLevelThreeId'] = $this->catLevelThreeId;
        }
        if (null !== $this->catLevelTwoId) {
            $res['CatLevelTwoId'] = $this->catLevelTwoId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTitleIntelligenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatLevelThreeId'])) {
            $model->catLevelThreeId = $map['CatLevelThreeId'];
        }
        if (isset($map['CatLevelTwoId'])) {
            $model->catLevelTwoId = $map['CatLevelTwoId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
