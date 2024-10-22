<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class DeleteKeywordRequest extends Model
{
    /**
     * @var string
     */
    public $keywordIdList;

    /**
     * @example [16754493]
     *
     * @var string
     */
    public $keywordIds;

    /**
     * @example customxx_xxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'keywordIdList' => 'KeywordIdList',
        'keywordIds'    => 'KeywordIds',
        'libId'         => 'LibId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteKeywordRequest
     */
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
