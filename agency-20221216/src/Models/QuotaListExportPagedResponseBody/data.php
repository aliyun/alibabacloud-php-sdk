<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\QuotaListExportPagedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Create Time
     *
     * @example 2023-12-21 21:31:57 UTC+8
     *
     * @var string
     */
    public $createTime;

    /**
     * @description File Name
     *
     * @example 5113766248601929_quota_2023-06-22_2023-12-21_all_2023122121310057
     *
     * @var string
     */
    public $fileName;

    /**
     * @description Notification Message
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Display of Task Status
     *
     * @example 3
     *
     * @var string
     */
    public $status;

    /**
     * @description Task Status Enum</br>
     * -1: Export Fail</br>
     * @example Export Success
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The link to download exported file.
     *
     * @example //aliyun-eco-market-servic-singapore.oss-ap-southeast-1.aliyuncs.com/5113766248601929_quota_2023-06-22_2023-12-21_all_2023122121310057
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'createTime' => 'CreateTime',
        'fileName'   => 'FileName',
        'message'    => 'Message',
        'status'     => 'Status',
        'statusCode' => 'StatusCode',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
