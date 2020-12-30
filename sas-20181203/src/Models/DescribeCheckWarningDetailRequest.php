<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningDetailRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $checkWarningId;
    protected $_name = [
        'sourceIp'       => 'SourceIp',
        'lang'           => 'Lang',
        'checkWarningId' => 'CheckWarningId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->checkWarningId) {
            $res['CheckWarningId'] = $this->checkWarningId;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['CheckWarningId'])) {
            $model->checkWarningId = $map['CheckWarningId'];
        }

        return $model;
    }
}
