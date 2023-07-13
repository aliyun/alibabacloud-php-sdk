<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts;
use AlibabaCloud\Tea\Model;

class DescribeContactListResponseBody extends Model
{
    /**
     * @description The description of the alert contact.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The status of the phone number. Valid values:
     *
     *   PENDING: The phone number is not activated. Alert notifications can be sent to the phone number by using text messages only after the phone number is activated.
     *   OK: The phone number is activated and can receive alert notifications.
     *
     * >  This parameter can be returned only on the China site (aliyun.com).
     * @var contacts
     */
    public $contacts;

    /**
     * @description The language in which the alert information is displayed. Valid values:
     *
     *   zh-cn: simplified Chinese
     *   en: English
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 100.
     * @example 06D5ECC2-B9BE-42A4-8FA3-1A610FB08B83
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The TradeManager ID of the alert contact.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of returned entries.
     *
     * @example 15
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'      => 'Code',
        'contacts'  => 'Contacts',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContactListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
