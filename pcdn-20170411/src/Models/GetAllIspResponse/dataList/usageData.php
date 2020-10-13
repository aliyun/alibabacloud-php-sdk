<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllIspResponse\dataList;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var string
     */
    public $nameCn;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'nameCn'     => 'NameCn',
        'nameEn'     => 'NameEn',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('nameCn', $this->nameCn, true);
        Model::validateRequired('nameEn', $this->nameEn, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameCn) {
            $res['NameCn'] = $this->nameCn;
        }
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
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
        if (isset($map['NameCn'])) {
            $model->nameCn = $map['NameCn'];
        }
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
