<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllIspResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $nameCn;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'nameEn'     => 'NameEn',
        'nameCn'     => 'NameCn',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }
        if (null !== $this->nameCn) {
            $res['NameCn'] = $this->nameCn;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['NameCn'])) {
            $model->nameCn = $map['NameCn'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
