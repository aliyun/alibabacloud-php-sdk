<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListResponseBody\smsTemplateList;

use AlibabaCloud\Tea\Model;

class reason extends Model
{
    /**
     * @description The time when the message template was rejected. Format: yyyy-MM-dd HH:mm:ss.
     *
     * @example 2020-06-04 16:01:17
     *
     * @var string
     */
    public $rejectDate;

    /**
     * @description The reason why the message template was rejected.
     *
     * @example The document cannot verify the authenticity of the information. Please upload it again.
     *
     * @var string
     */
    public $rejectInfo;

    /**
     * @description The remarks about the rejection.
     *
     * @example The document cannot verify the authenticity of the information. Please upload it again.
     *
     * @var string
     */
    public $rejectSubInfo;
    protected $_name = [
        'rejectDate'    => 'RejectDate',
        'rejectInfo'    => 'RejectInfo',
        'rejectSubInfo' => 'RejectSubInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rejectDate) {
            $res['RejectDate'] = $this->rejectDate;
        }
        if (null !== $this->rejectInfo) {
            $res['RejectInfo'] = $this->rejectInfo;
        }
        if (null !== $this->rejectSubInfo) {
            $res['RejectSubInfo'] = $this->rejectSubInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RejectDate'])) {
            $model->rejectDate = $map['RejectDate'];
        }
        if (isset($map['RejectInfo'])) {
            $model->rejectInfo = $map['RejectInfo'];
        }
        if (isset($map['RejectSubInfo'])) {
            $model->rejectSubInfo = $map['RejectSubInfo'];
        }

        return $model;
    }
}
