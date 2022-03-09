<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindOneResponseBody;

use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $extInfoMap;

    /**
     * @var string[]
     */
    public $isvTypeEnumList;

    /**
     * @var string[]
     */
    public $supportTypeEnumList;
    protected $_name = [
        'extInfoMap'          => 'ExtInfoMap',
        'isvTypeEnumList'     => 'IsvTypeEnumList',
        'supportTypeEnumList' => 'SupportTypeEnumList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfoMap) {
            $res['ExtInfoMap'] = $this->extInfoMap;
        }
        if (null !== $this->isvTypeEnumList) {
            $res['IsvTypeEnumList'] = $this->isvTypeEnumList;
        }
        if (null !== $this->supportTypeEnumList) {
            $res['SupportTypeEnumList'] = $this->supportTypeEnumList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfoMap'])) {
            $model->extInfoMap = $map['ExtInfoMap'];
        }
        if (isset($map['IsvTypeEnumList'])) {
            if (!empty($map['IsvTypeEnumList'])) {
                $model->isvTypeEnumList = $map['IsvTypeEnumList'];
            }
        }
        if (isset($map['SupportTypeEnumList'])) {
            if (!empty($map['SupportTypeEnumList'])) {
                $model->supportTypeEnumList = $map['SupportTypeEnumList'];
            }
        }

        return $model;
    }
}
