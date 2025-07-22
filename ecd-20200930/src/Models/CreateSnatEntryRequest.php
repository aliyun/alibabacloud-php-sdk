<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateSnatEntryRequest extends Model
{
    /**
     * @var int
     */
    public $eipAffinity;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $snatEntryName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $snatTableId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceCIDR;
    protected $_name = [
        'eipAffinity' => 'EipAffinity',
        'regionId' => 'RegionId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp' => 'SnatIp',
        'snatTableId' => 'SnatTableId',
        'sourceCIDR' => 'SourceCIDR',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipAffinity) {
            $res['EipAffinity'] = $this->eipAffinity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipAffinity'])) {
            $model->eipAffinity = $map['EipAffinity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }

        return $model;
    }
}
