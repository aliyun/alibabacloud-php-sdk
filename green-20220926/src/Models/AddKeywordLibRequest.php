<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class AddKeywordLibRequest extends Model
{
    /**
     * @var string
     */
    public $keywords;

    /**
     * @example upload/1e5353c0-0d91-40ba-9d41-ae7abd3fe561.txt
     *
     * @var string
     */
    public $keywordsObject;

    /**
     * @var string
     */
    public $libName;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'keywords' => 'Keywords',
        'keywordsObject' => 'KeywordsObject',
        'libName' => 'LibName',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->keywordsObject) {
            $res['KeywordsObject'] = $this->keywordsObject;
        }
        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddKeywordLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['KeywordsObject'])) {
            $model->keywordsObject = $map['KeywordsObject'];
        }
        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
