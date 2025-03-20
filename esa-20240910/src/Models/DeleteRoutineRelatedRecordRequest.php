<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoutineRelatedRecordRequest extends Model
{
    /**
     * @description The routine name.
     *
     * This parameter is required.
     *
     * @example DeleteRoutineRelatedRecord
     *
     * @var string
     */
    public $name;

    /**
     * @description The record ID.
     *
     * This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The record name.
     *
     * This parameter is required.
     *
     * @example test-xxx.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description The website ID.
     *
     * This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'name' => 'Name',
        'recordId' => 'RecordId',
        'recordName' => 'RecordName',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoutineRelatedRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
