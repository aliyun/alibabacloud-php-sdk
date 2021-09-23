<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListOfficeConversionTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var OfficeConversionTask[]
     */
    public $officeConversionTasks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'             => 'NextToken',
        'officeConversionTasks' => 'OfficeConversionTasks',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeConversionTasks) {
            $res['OfficeConversionTasks'] = [];
            if (null !== $this->officeConversionTasks && \is_array($this->officeConversionTasks)) {
                $n = 0;
                foreach ($this->officeConversionTasks as $item) {
                    $res['OfficeConversionTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOfficeConversionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeConversionTasks'])) {
            if (!empty($map['OfficeConversionTasks'])) {
                $model->officeConversionTasks = [];
                $n                            = 0;
                foreach ($map['OfficeConversionTasks'] as $item) {
                    $model->officeConversionTasks[$n++] = null !== $item ? OfficeConversionTask::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
