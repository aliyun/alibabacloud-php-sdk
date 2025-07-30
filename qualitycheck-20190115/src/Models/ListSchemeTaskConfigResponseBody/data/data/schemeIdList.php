<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class schemeIdList extends Model
{
    /**
     * @var int[]
     */
    public $schemeIdList;
    protected $_name = [
        'schemeIdList' => 'SchemeIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemeIdList) {
            $res['SchemeIdList'] = $this->schemeIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemeIdList'])) {
            if (!empty($map['SchemeIdList'])) {
                $model->schemeIdList = $map['SchemeIdList'];
            }
        }

        return $model;
    }
}
