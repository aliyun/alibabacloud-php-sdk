<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusFileStatusesResponseBody\fileStatuses;

class ListVirusFileStatusesResponseBody extends Model
{
    /**
     * @var fileStatuses[]
     */
    public $fileStatuses;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalNum;
    protected $_name = [
        'fileStatuses' => 'FileStatuses',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->fileStatuses)) {
            Model::validateArray($this->fileStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileStatuses) {
            if (\is_array($this->fileStatuses)) {
                $res['FileStatuses'] = [];
                $n1 = 0;
                foreach ($this->fileStatuses as $item1) {
                    $res['FileStatuses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileStatuses'])) {
            if (!empty($map['FileStatuses'])) {
                $model->fileStatuses = [];
                $n1 = 0;
                foreach ($map['FileStatuses'] as $item1) {
                    $model->fileStatuses[$n1] = fileStatuses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
