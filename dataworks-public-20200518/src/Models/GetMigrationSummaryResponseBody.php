<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationSummaryResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetMigrationSummaryResponseBody extends Model
{
    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request is successful.
     *   false: The request fails. You can locate the error based on the request ID.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the migration task.
     *
     * You can call the [CreateImportMigration](~~CreateImportMigration~~) operation to obtain the ID of the import task and call the [CreateExportMigration](~~CreateImportMigration~~) operation to obtain the ID of the export task.
     * @example 19999A96-71BA-2845-B455-ED620EF4E37F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request. You can locate logs and troubleshoot issues based on the ID.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMigrationSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
