<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationAccountDetailsResponseBody\module;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $acquisitionTime;

    /**
     * @var int
     */
    public $balance;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var int
     */
    public $initQuota;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceTypeName;
    protected $_name = [
        'acquisitionTime' => 'AcquisitionTime',
        'balance' => 'Balance',
        'endDate' => 'EndDate',
        'expired' => 'Expired',
        'initQuota' => 'InitQuota',
        'sourceType' => 'SourceType',
        'sourceTypeName' => 'SourceTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acquisitionTime) {
            $res['AcquisitionTime'] = $this->acquisitionTime;
        }

        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->initQuota) {
            $res['InitQuota'] = $this->initQuota;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceTypeName) {
            $res['SourceTypeName'] = $this->sourceTypeName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcquisitionTime'])) {
            $model->acquisitionTime = $map['AcquisitionTime'];
        }

        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['InitQuota'])) {
            $model->initQuota = $map['InitQuota'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SourceTypeName'])) {
            $model->sourceTypeName = $map['SourceTypeName'];
        }

        return $model;
    }
}
