<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportVulResponseBody extends Model
{
    /**
     * @description The name of the exported file.
     *
     * @example app_20211101
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The ID of the exported file.
     *
     * @example 81634
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example E1FAB2B8-DF4D-55DF-BC3D-5C3CA6FD5B13
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileName'  => 'FileName',
        'id'        => 'Id',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportVulResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
