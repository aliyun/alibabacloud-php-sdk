<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetWmExtractTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-01-01 11:22:33
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test-****.pdf
     *
     * @var string
     */
    public $filename;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example wmt-9648c22d2eb2cb57bb855dcae7898464********
     *
     * @var string
     */
    public $taskId;

    /**
     * @example aGVsbG8gc2Fz****
     *
     * @var string
     */
    public $wmInfoBytesB64;

    /**
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @example 123**
     *
     * @var int
     */
    public $wmInfoUint;

    /**
     * @example PureDocument
     *
     * @var string
     */
    public $wmType;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'filename'       => 'Filename',
        'status'         => 'Status',
        'taskId'         => 'TaskId',
        'wmInfoBytesB64' => 'WmInfoBytesB64',
        'wmInfoSize'     => 'WmInfoSize',
        'wmInfoUint'     => 'WmInfoUint',
        'wmType'         => 'WmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->wmInfoBytesB64) {
            $res['WmInfoBytesB64'] = $this->wmInfoBytesB64;
        }
        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }
        if (null !== $this->wmInfoUint) {
            $res['WmInfoUint'] = $this->wmInfoUint;
        }
        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WmInfoBytesB64'])) {
            $model->wmInfoBytesB64 = $map['WmInfoBytesB64'];
        }
        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }
        if (isset($map['WmInfoUint'])) {
            $model->wmInfoUint = $map['WmInfoUint'];
        }
        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
