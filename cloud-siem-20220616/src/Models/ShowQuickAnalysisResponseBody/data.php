<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ShowQuickAnalysisResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The index fields of the logs.
     *
     * @var string[]
     */
    public $indexList;
    protected $_name = [
        'indexList' => 'IndexList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexList) {
            $res['IndexList'] = $this->indexList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexList'])) {
            if (!empty($map['IndexList'])) {
                $model->indexList = $map['IndexList'];
            }
        }

        return $model;
    }
}
