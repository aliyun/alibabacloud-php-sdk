<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryVirtualNumberRelationResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   The value 200 indicates that the request was successful.
     *   For more information about other response codes, see [API error codes](~~112502~~).
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The list of associations between virtual numbers and real numbers. The following fields are returned:
     *
     *   **relatedNum**: the real number.
     *   **createTime**: the time when the number was activated.
     *   **pageNo**: the page number.
     *   **pageSize**: the number of entries per page.
     *   **total**: the total number of entries returned.
     *
     * @example {"data":[{"relatedNum":"1705559****","createTime":"2021-03-26 12:34:08"}],"pageSize":20,"total":1,"pageNo":1}
     *
     * @var string
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example 8FAD5988-B483-48A4-B251-6E8470A67371
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'requestId' => 'RequestId',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryVirtualNumberRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
