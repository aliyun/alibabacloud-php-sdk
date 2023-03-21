<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningDetailRequest extends Model
{
    /**
     * @var int
     */
    public $checkWarningId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'checkWarningId' => 'CheckWarningId',
        'lang'           => 'Lang',
        'sourceIp'       => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkWarningId) {
            $res['CheckWarningId'] = $this->checkWarningId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckWarningId'])) {
            $model->checkWarningId = $map['CheckWarningId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
