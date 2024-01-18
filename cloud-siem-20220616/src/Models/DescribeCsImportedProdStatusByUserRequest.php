<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeCsImportedProdStatusByUserRequest extends Model
{
    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The code of the cloud service.
     *
     * @example sas
     *
     * @var string
     */
    public $sourceLogProd;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 123XXXXXX
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'regionId'      => 'RegionId',
        'sourceLogProd' => 'SourceLogProd',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceLogProd) {
            $res['SourceLogProd'] = $this->sourceLogProd;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCsImportedProdStatusByUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceLogProd'])) {
            $model->sourceLogProd = $map['SourceLogProd'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
