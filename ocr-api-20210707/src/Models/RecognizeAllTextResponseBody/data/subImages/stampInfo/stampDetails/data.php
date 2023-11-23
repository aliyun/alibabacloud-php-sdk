<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example "3205823XXXXXX"
     *
     * @var string
     */
    public $antiFakeCode;

    /**
     * @example "XXX"
     *
     * @var string
     */
    public $companyId;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @example ""
     *
     * @var string
     */
    public $organizationNameEng;

    /**
     * @example "3205823XXXXXX"
     *
     * @var string
     */
    public $otherText;

    /**
     * @example ""
     *
     * @var string
     */
    public $taxpayerId;

    /**
     * @var string
     */
    public $topText;
    protected $_name = [
        'antiFakeCode'        => 'AntiFakeCode',
        'companyId'           => 'CompanyId',
        'organizationName'    => 'OrganizationName',
        'organizationNameEng' => 'OrganizationNameEng',
        'otherText'           => 'OtherText',
        'taxpayerId'          => 'TaxpayerId',
        'topText'             => 'TopText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antiFakeCode) {
            $res['AntiFakeCode'] = $this->antiFakeCode;
        }
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->organizationNameEng) {
            $res['OrganizationNameEng'] = $this->organizationNameEng;
        }
        if (null !== $this->otherText) {
            $res['OtherText'] = $this->otherText;
        }
        if (null !== $this->taxpayerId) {
            $res['TaxpayerId'] = $this->taxpayerId;
        }
        if (null !== $this->topText) {
            $res['TopText'] = $this->topText;
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
        if (isset($map['AntiFakeCode'])) {
            $model->antiFakeCode = $map['AntiFakeCode'];
        }
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['OrganizationNameEng'])) {
            $model->organizationNameEng = $map['OrganizationNameEng'];
        }
        if (isset($map['OtherText'])) {
            $model->otherText = $map['OtherText'];
        }
        if (isset($map['TaxpayerId'])) {
            $model->taxpayerId = $map['TaxpayerId'];
        }
        if (isset($map['TopText'])) {
            $model->topText = $map['TopText'];
        }

        return $model;
    }
}
