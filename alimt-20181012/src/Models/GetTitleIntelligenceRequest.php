<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetTitleIntelligenceRequest extends Model
{
    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var int
     */
    public $catLevelThreeId;

    /**
     * @var int
     */
    public $catLevelTwoId;

    /**
     * @var string
     */
    public $keywords;
    protected $_name = [
        'platform'        => 'Platform',
        'extra'           => 'Extra',
        'catLevelThreeId' => 'CatLevelThreeId',
        'catLevelTwoId'   => 'CatLevelTwoId',
        'keywords'        => 'Keywords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->catLevelThreeId) {
            $res['CatLevelThreeId'] = $this->catLevelThreeId;
        }
        if (null !== $this->catLevelTwoId) {
            $res['CatLevelTwoId'] = $this->catLevelTwoId;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['CatLevelThreeId'])) {
            $model->catLevelThreeId = $map['CatLevelThreeId'];
        }
        if (isset($map['CatLevelTwoId'])) {
            $model->catLevelTwoId = $map['CatLevelTwoId'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        return $model;
    }
}
