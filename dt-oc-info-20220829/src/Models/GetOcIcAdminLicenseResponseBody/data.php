<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcAdminLicenseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 2022-08-08
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $licenseName;

    /**
     * @var string
     */
    public $licenseNo;

    /**
     * @example 2021-06-11
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'content'     => 'Content',
        'department'  => 'Department',
        'endDate'     => 'EndDate',
        'licenseName' => 'LicenseName',
        'licenseNo'   => 'LicenseNo',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->licenseName) {
            $res['LicenseName'] = $this->licenseName;
        }
        if (null !== $this->licenseNo) {
            $res['LicenseNo'] = $this->licenseNo;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['LicenseName'])) {
            $model->licenseName = $map['LicenseName'];
        }
        if (isset($map['LicenseNo'])) {
            $model->licenseNo = $map['LicenseNo'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
