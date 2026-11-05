<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryMauReportDataResponseBody;

use AlibabaCloud\Dara\Model;

class mauReportDataModel extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var int
     */
    public $mau;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statDate;

    /**
     * @var string
     */
    public $statMonth;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'mau' => 'Mau',
        'regionId' => 'RegionId',
        'statDate' => 'StatDate',
        'statMonth' => 'StatMonth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->mau) {
            $res['Mau'] = $this->mau;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
        }

        if (null !== $this->statMonth) {
            $res['StatMonth'] = $this->statMonth;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['Mau'])) {
            $model->mau = $map['Mau'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        if (isset($map['StatMonth'])) {
            $model->statMonth = $map['StatMonth'];
        }

        return $model;
    }
}
