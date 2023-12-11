<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListProjectLogStoresRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $sourceLogCode;

    /**
     * @example sas
     *
     * @var string
     */
    public $sourceProdCode;

    /**
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'regionId'       => 'RegionId',
        'sourceLogCode'  => 'SourceLogCode',
        'sourceProdCode' => 'SourceProdCode',
        'subUserId'      => 'SubUserId',
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
        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }
        if (null !== $this->sourceProdCode) {
            $res['SourceProdCode'] = $this->sourceProdCode;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectLogStoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }
        if (isset($map['SourceProdCode'])) {
            $model->sourceProdCode = $map['SourceProdCode'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
