<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryWabaBusinessInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 192882828733
     *
     * @var string
     */
    public $businessId;

    /**
     * @example Alibaba
     *
     * @var string
     */
    public $businessName;

    /**
     * @example verified
     *
     * @var string
     */
    public $verificationStatus;

    /**
     * @example 零售
     *
     * @var string
     */
    public $vertical;
    protected $_name = [
        'businessId'         => 'BusinessId',
        'businessName'       => 'BusinessName',
        'verificationStatus' => 'VerificationStatus',
        'vertical'           => 'Vertical',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }
        if (null !== $this->vertical) {
            $res['Vertical'] = $this->vertical;
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
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }
        if (isset($map['Vertical'])) {
            $model->vertical = $map['Vertical'];
        }

        return $model;
    }
}
