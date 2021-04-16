<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListStructureStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $backCategory;
    protected $_name = [
        'corpId'       => 'CorpId',
        'backCategory' => 'BackCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->backCategory) {
            $res['BackCategory'] = $this->backCategory;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['BackCategory'])) {
            $model->backCategory = $map['BackCategory'];
        }

        return $model;
    }
}
