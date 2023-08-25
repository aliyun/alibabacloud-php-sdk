<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetSparkTemplateFullTreeResponseBody extends Model
{
    /**
     * @description The directory structure of the application template. Fields in the response parameter:
     *
     *   **Uid**: the UID of the Alibaba Cloud account.
     *
     *   **Type**: the type of the application template. Valid values:
     *
     *   **FOLDER**: directory
     *   **FILE**: application
     *
     *   **Parent**: the parent directory. Valid values:
     *
     *   **0**: No child directory exists.
     *   **-1**: A child directory exists.
     *
     *   **Children**: the child directory.
     *
     *   **LastModified**: the time when the application is last modified. The time is displayed in the UNIX timestamp format. Unit: seconds.
     *
     *   **AppType**: the application type. Valid values:
     *
     *   **SQL**: SQL application
     *   **STREAMING**: streaming application
     *   **BATCH**: batch application
     *
     *   **Name**: the name of the directory or application.
     *
     *   **Id**: the ID of the directory or application.
     *
     * @example {     "Uid": 10415777****,     "Type": "FOLDER",     "Parent": -1,     "Children": [       {         "LastModified": 1648544748,         "Uid": 104157779****,         "Type": "FILE",         "Parent": 0,         "Id": s202204132****,         "AppType": "SQL",         "Name": "f"       },       {         "LastModified": 1648544956,         "Uid": 1041577795****,         "Type": "FOLDER",         "Parent": 0,         "Id": 157,         "Name": "f3333"       }     ],     "Id": 725204,     "Name": "root"   }
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return GetSparkTemplateFullTreeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
