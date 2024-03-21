<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicantRequest extends Model
{
    /**
     * @example 234567
     *
     * @var int
     */
    public $applicantId;
    protected $_name = [
        'applicantId' => 'ApplicantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }

        return $model;
    }
}
