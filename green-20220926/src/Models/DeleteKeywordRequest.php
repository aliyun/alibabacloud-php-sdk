<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class DeleteKeywordRequest extends Model
{
    /**
     * @var string
     */
    public $keywordIdList;

    /**
     * @var string
     */
    public $keywordIds;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'keywordIdList' => 'KeywordIdList',
        'keywordIds' => 'KeywordIds',
        'libId' => 'LibId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordIdList) {
            $res['KeywordIdList'] = $this->keywordIdList;
        }

        if (null !== $this->keywordIds) {
            $res['KeywordIds'] = $this->keywordIds;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['KeywordIdList'])) {
            $model->keywordIdList = $map['KeywordIdList'];
        }

        if (isset($map['KeywordIds'])) {
            $model->keywordIds = $map['KeywordIds'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
