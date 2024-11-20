<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBResponseBody;

use AlibabaCloud\Tea\Model;

class DBList extends Model
{
    /**
     * @description The ID of the media fingerprint library.
     *
     * @example 88c6ca184c0e47098a5b665e2a12****
     *
     * @var string
     */
    public $DBId;

    /**
     * @description The description of the media fingerprint library.
     *
     * @var string
     */
    public $description;

    /**
     * @description The model of the media fingerprint library. Valid values:
     *
     *   **Video**
     *   **Audio**
     *   **Image**
     *   **Text** (supported only in the China (Shanghai) region)
     *
     * @example Video
     *
     * @var string
     */
    public $model;

    /**
     * @description The name of the media fingerprint library.
     *
     * @example example-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The state of the media fingerprint library. Default value: **offline**. ****Valid values:
     *
     *   **offline**: The media fingerprint library is offline.
     *   **active**: The media fingerprint library is online.
     *   **deleted**: The media fingerprint library is deleted.
     *
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'DBId'        => 'DBId',
        'description' => 'Description',
        'model'       => 'Model',
        'name'        => 'Name',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBId) {
            $res['DBId'] = $this->DBId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBId'])) {
            $model->DBId = $map['DBId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
