<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaScreenshotByDomainResponseBody;

use AlibabaCloud\Tea\Model;

class resultDesc extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $screenshotNum;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'businessType'  => 'BusinessType',
        'domain'        => 'Domain',
        'screenshotNum' => 'ScreenshotNum',
        'time'          => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->screenshotNum) {
            $res['ScreenshotNum'] = $this->screenshotNum;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ScreenshotNum'])) {
            $model->screenshotNum = $map['ScreenshotNum'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
