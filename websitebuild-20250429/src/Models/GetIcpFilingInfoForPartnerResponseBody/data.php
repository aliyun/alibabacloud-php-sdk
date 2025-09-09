<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $icpNumber;

    /**
     * @var bool
     */
    public $recorded;

    /**
     * @var string
     */
    public $siteRecordNumber;
    protected $_name = [
        'icpNumber' => 'IcpNumber',
        'recorded' => 'Recorded',
        'siteRecordNumber' => 'SiteRecordNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icpNumber) {
            $res['IcpNumber'] = $this->icpNumber;
        }

        if (null !== $this->recorded) {
            $res['Recorded'] = $this->recorded;
        }

        if (null !== $this->siteRecordNumber) {
            $res['SiteRecordNumber'] = $this->siteRecordNumber;
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
        if (isset($map['IcpNumber'])) {
            $model->icpNumber = $map['IcpNumber'];
        }

        if (isset($map['Recorded'])) {
            $model->recorded = $map['Recorded'];
        }

        if (isset($map['SiteRecordNumber'])) {
            $model->siteRecordNumber = $map['SiteRecordNumber'];
        }

        return $model;
    }
}
