<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next;

use AlibabaCloud\Dara\Model;

class qualification extends Model
{
    /**
     * @var string
     */
    public $icpRecordNumber;

    /**
     * @var string
     */
    public $icpSiteRecordNumber;

    /**
     * @var string
     */
    public $policeRecordNumber;
    protected $_name = [
        'icpRecordNumber' => 'IcpRecordNumber',
        'icpSiteRecordNumber' => 'IcpSiteRecordNumber',
        'policeRecordNumber' => 'PoliceRecordNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icpRecordNumber) {
            $res['IcpRecordNumber'] = $this->icpRecordNumber;
        }

        if (null !== $this->icpSiteRecordNumber) {
            $res['IcpSiteRecordNumber'] = $this->icpSiteRecordNumber;
        }

        if (null !== $this->policeRecordNumber) {
            $res['PoliceRecordNumber'] = $this->policeRecordNumber;
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
        if (isset($map['IcpRecordNumber'])) {
            $model->icpRecordNumber = $map['IcpRecordNumber'];
        }

        if (isset($map['IcpSiteRecordNumber'])) {
            $model->icpSiteRecordNumber = $map['IcpSiteRecordNumber'];
        }

        if (isset($map['PoliceRecordNumber'])) {
            $model->policeRecordNumber = $map['PoliceRecordNumber'];
        }

        return $model;
    }
}
