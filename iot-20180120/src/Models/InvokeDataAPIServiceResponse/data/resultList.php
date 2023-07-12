<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponse\data;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description ResultList
     *
     * @var mixed[][]
     */
    public $resultList;
    protected $_name = [
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
        Model::validateRequired('resultList', $this->resultList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultList) {
            $res['ResultList'] = $this->resultList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = $map['ResultList'];
            }
        }

        return $model;
    }
}
