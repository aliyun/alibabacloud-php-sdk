<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CheckFlsmFillRequest extends Model
{
    /**
     * @var string
     */
    public $applicantType;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $personalType;

    /**
     * @var string
     */
    public $wtrName;
    protected $_name = [
        'applicantType' => 'ApplicantType',
        'ossKey'        => 'OssKey',
        'personalType'  => 'PersonalType',
        'wtrName'       => 'WtrName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantType) {
            $res['ApplicantType'] = $this->applicantType;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->personalType) {
            $res['PersonalType'] = $this->personalType;
        }
        if (null !== $this->wtrName) {
            $res['WtrName'] = $this->wtrName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckFlsmFillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantType'])) {
            $model->applicantType = $map['ApplicantType'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['PersonalType'])) {
            $model->personalType = $map['PersonalType'];
        }
        if (isset($map['WtrName'])) {
            $model->wtrName = $map['WtrName'];
        }

        return $model;
    }
}
