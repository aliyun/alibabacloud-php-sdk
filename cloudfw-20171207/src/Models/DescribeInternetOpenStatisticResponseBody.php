<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInternetOpenStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $internetIpNum;

    /**
     * @var int
     */
    public $internetPortNum;

    /**
     * @var int
     */
    public $internetRiskIpNum;

    /**
     * @var int
     */
    public $internetRiskPortNum;

    /**
     * @var int
     */
    public $internetRiskServiceNum;

    /**
     * @var int
     */
    public $internetServiceNum;

    /**
     * @var int
     */
    public $internetSlbIpNum;

    /**
     * @var int
     */
    public $internetSlbIpPortNum;

    /**
     * @var int
     */
    public $internetUnprotectedPortNum;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'internetIpNum' => 'InternetIpNum',
        'internetPortNum' => 'InternetPortNum',
        'internetRiskIpNum' => 'InternetRiskIpNum',
        'internetRiskPortNum' => 'InternetRiskPortNum',
        'internetRiskServiceNum' => 'InternetRiskServiceNum',
        'internetServiceNum' => 'InternetServiceNum',
        'internetSlbIpNum' => 'InternetSlbIpNum',
        'internetSlbIpPortNum' => 'InternetSlbIpPortNum',
        'internetUnprotectedPortNum' => 'InternetUnprotectedPortNum',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetIpNum) {
            $res['InternetIpNum'] = $this->internetIpNum;
        }

        if (null !== $this->internetPortNum) {
            $res['InternetPortNum'] = $this->internetPortNum;
        }

        if (null !== $this->internetRiskIpNum) {
            $res['InternetRiskIpNum'] = $this->internetRiskIpNum;
        }

        if (null !== $this->internetRiskPortNum) {
            $res['InternetRiskPortNum'] = $this->internetRiskPortNum;
        }

        if (null !== $this->internetRiskServiceNum) {
            $res['InternetRiskServiceNum'] = $this->internetRiskServiceNum;
        }

        if (null !== $this->internetServiceNum) {
            $res['InternetServiceNum'] = $this->internetServiceNum;
        }

        if (null !== $this->internetSlbIpNum) {
            $res['InternetSlbIpNum'] = $this->internetSlbIpNum;
        }

        if (null !== $this->internetSlbIpPortNum) {
            $res['InternetSlbIpPortNum'] = $this->internetSlbIpPortNum;
        }

        if (null !== $this->internetUnprotectedPortNum) {
            $res['InternetUnprotectedPortNum'] = $this->internetUnprotectedPortNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InternetIpNum'])) {
            $model->internetIpNum = $map['InternetIpNum'];
        }

        if (isset($map['InternetPortNum'])) {
            $model->internetPortNum = $map['InternetPortNum'];
        }

        if (isset($map['InternetRiskIpNum'])) {
            $model->internetRiskIpNum = $map['InternetRiskIpNum'];
        }

        if (isset($map['InternetRiskPortNum'])) {
            $model->internetRiskPortNum = $map['InternetRiskPortNum'];
        }

        if (isset($map['InternetRiskServiceNum'])) {
            $model->internetRiskServiceNum = $map['InternetRiskServiceNum'];
        }

        if (isset($map['InternetServiceNum'])) {
            $model->internetServiceNum = $map['InternetServiceNum'];
        }

        if (isset($map['InternetSlbIpNum'])) {
            $model->internetSlbIpNum = $map['InternetSlbIpNum'];
        }

        if (isset($map['InternetSlbIpPortNum'])) {
            $model->internetSlbIpPortNum = $map['InternetSlbIpPortNum'];
        }

        if (isset($map['InternetUnprotectedPortNum'])) {
            $model->internetUnprotectedPortNum = $map['InternetUnprotectedPortNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
