<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\RestoreArchivedRecordingsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example job-25920271311543****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example False
     *
     * @var string
     */
    public $exists;

    /**
     * @example Progressing
     *
     * @var string
     */
    public $status;

    /**
     * @example Standard
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'contactId'   => 'ContactId',
        'exists'      => 'Exists',
        'status'      => 'Status',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->exists) {
            $res['Exists'] = $this->exists;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Exists'])) {
            $model->exists = $map['Exists'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
