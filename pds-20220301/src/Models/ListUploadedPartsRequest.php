<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListUploadedPartsRequest extends Model
{
    /**
     * @description The drive ID. This parameter is required if the file is not uploaded by using the share URL of the file.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID.
     *
     * This parameter is required.
     * @example 322fb07b975f4b0ae1b543fe8475eee4c19eb2b2
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The maximum number of results to return. Valid values: 1 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker. By default, this parameter is left empty.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var int
     */
    public $partNumberMarker;

    /**
     * @description The share ID. This parameter is required if the file is uploaded by using the share URL of the file.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The ID of the upload task.
     *
     * This parameter is required.
     * @example 00166D06127B413BA1EC8ABB1144D101
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'driveId'          => 'drive_id',
        'fileId'           => 'file_id',
        'limit'            => 'limit',
        'partNumberMarker' => 'part_number_marker',
        'shareId'          => 'share_id',
        'uploadId'         => 'upload_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->partNumberMarker) {
            $res['part_number_marker'] = $this->partNumberMarker;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUploadedPartsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['part_number_marker'])) {
            $model->partNumberMarker = $map['part_number_marker'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
