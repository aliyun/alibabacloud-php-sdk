<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string[]
     */
    public $levels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $timestamps;
    protected $_name = [
        'contents'     => 'Contents',
        'functionName' => 'FunctionName',
        'levels'       => 'Levels',
        'requestId'    => 'RequestId',
        'spaceId'      => 'SpaceId',
        'status'       => 'Status',
        'timestamps'   => 'Timestamps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamps) {
            $res['Timestamps'] = $this->timestamps;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Levels'])) {
            if (!empty($map['Levels'])) {
                $model->levels = $map['Levels'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamps'])) {
            if (!empty($map['Timestamps'])) {
                $model->timestamps = $map['Timestamps'];
            }
        }

        return $model;
    }
}
