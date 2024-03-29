<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryVirtualNumberResponseBody extends Model
{
    /**
     * @description The response code. The value 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The details of the numbers associated with the virtual numbers. The following fields are returned:
     *
     *   createTime: the time when the number was activated.
     *   qualificationCount: the number of qualifications.
     *   cityCount: the number of cities.
     *   phoneNumCount: the number of virtual numbers.
     *   remark: the additional information.
     *   phoneNum: the virtual number.
     *   routeType: the route type.
     *   canCancel: indicates whether the number can be deactivated.
     *   specCount: the number of Internet service providers (ISPs).
     *   status: the number state. Valid values: **1**, **0**, and **-1**. The value 1 indicates that the number is valid. The value 0 indicates that the number is invalid. The value -1 indicates that the number was deactivated.
     *   pageNo: the page number.
     *   pageSize: the number of entries per page.
     *   total: the total number of virtual numbers.
     *
     * @example {"data":[{"createTime":"2020-07-15 04:00:00","qualificationCount":0,"cityCount":0,"phoneNumCount":1,"remark":"20200715Unicom CTD shut down","phoneNum":"05516214****","routeType":1,"canCancel":true,"specCount":0,"status":"1"}],"pageSize":1,"total":17,"pageNo":1}
     *
     * @var string
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example 9FF70B74-1B3C-44C1-ACDF-8DF962988F0E
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
     * @return QueryVirtualNumberResponseBody
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
