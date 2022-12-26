<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportSuspEventsResponseBody extends Model
{
    /**
     * @example suspicious_event_20221209
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example EF145C20-6A19-529A-8BDD-0671DXXXXXX
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
     * @return ExportSuspEventsResponseBody
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
