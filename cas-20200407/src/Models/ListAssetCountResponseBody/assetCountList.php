<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListAssetCountResponseBody;

use AlibabaCloud\Dara\Model;

class assetCountList extends Model
{
    /**
     * @var int
     */
    public $aliyunAssetCount;

    /**
     * @var int
     */
    public $certificateCount;

    /**
     * @var int
     */
    public $countDate;

    /**
     * @var int
     */
    public $domainAssetCount;

    /**
     * @var int
     */
    public $multiCloudAssetCount;

    /**
     * @var int
     */
    public $points;
    protected $_name = [
        'aliyunAssetCount' => 'AliyunAssetCount',
        'certificateCount' => 'CertificateCount',
        'countDate' => 'CountDate',
        'domainAssetCount' => 'DomainAssetCount',
        'multiCloudAssetCount' => 'MultiCloudAssetCount',
        'points' => 'Points',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAssetCount) {
            $res['AliyunAssetCount'] = $this->aliyunAssetCount;
        }

        if (null !== $this->certificateCount) {
            $res['CertificateCount'] = $this->certificateCount;
        }

        if (null !== $this->countDate) {
            $res['CountDate'] = $this->countDate;
        }

        if (null !== $this->domainAssetCount) {
            $res['DomainAssetCount'] = $this->domainAssetCount;
        }

        if (null !== $this->multiCloudAssetCount) {
            $res['MultiCloudAssetCount'] = $this->multiCloudAssetCount;
        }

        if (null !== $this->points) {
            $res['Points'] = $this->points;
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
        if (isset($map['AliyunAssetCount'])) {
            $model->aliyunAssetCount = $map['AliyunAssetCount'];
        }

        if (isset($map['CertificateCount'])) {
            $model->certificateCount = $map['CertificateCount'];
        }

        if (isset($map['CountDate'])) {
            $model->countDate = $map['CountDate'];
        }

        if (isset($map['DomainAssetCount'])) {
            $model->domainAssetCount = $map['DomainAssetCount'];
        }

        if (isset($map['MultiCloudAssetCount'])) {
            $model->multiCloudAssetCount = $map['MultiCloudAssetCount'];
        }

        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }

        return $model;
    }
}
