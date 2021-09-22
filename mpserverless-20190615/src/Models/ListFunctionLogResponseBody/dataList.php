<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string[]
     */
    public $timestamps;

    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var string[]
     */
    public $levels;
    protected $_name = [
        'status'       => 'Status',
        'spaceId'      => 'SpaceId',
        'requestId'    => 'RequestId',
        'functionName' => 'FunctionName',
        'timestamps'   => 'Timestamps',
        'contents'     => 'Contents',
        'levels'       => 'Levels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->timestamps) {
            $res['Timestamps'] = $this->timestamps;
        }
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Timestamps'])) {
            if (!empty($map['Timestamps'])) {
                $model->timestamps = $map['Timestamps'];
            }
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }
        if (isset($map['Levels'])) {
            if (!empty($map['Levels'])) {
                $model->levels = $map['Levels'];
            }
        }

        return $model;
    }
}
