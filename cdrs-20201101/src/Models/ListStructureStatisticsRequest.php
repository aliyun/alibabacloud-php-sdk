<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListStructureStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $backCategory;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'backCategory' => 'BackCategory',
        'corpId'       => 'CorpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backCategory) {
            $res['BackCategory'] = $this->backCategory;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStructureStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackCategory'])) {
            $model->backCategory = $map['BackCategory'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        return $model;
    }
}
