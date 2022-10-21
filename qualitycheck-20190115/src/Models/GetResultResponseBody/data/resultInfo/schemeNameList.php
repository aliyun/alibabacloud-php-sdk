<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Tea\Model;

class schemeNameList extends Model
{
    /**
     * @var string[]
     */
    public $schemeNameList;
    protected $_name = [
        'schemeNameList' => 'SchemeNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemeNameList) {
            $res['SchemeNameList'] = $this->schemeNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemeNameList'])) {
            if (!empty($map['SchemeNameList'])) {
                $model->schemeNameList = $map['SchemeNameList'];
            }
        }

        return $model;
    }
}
