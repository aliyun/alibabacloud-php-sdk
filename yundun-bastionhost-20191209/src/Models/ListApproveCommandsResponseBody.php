<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsResponseBody\approveCommands;
use AlibabaCloud\Tea\Model;

class ListApproveCommandsResponseBody extends Model
{
    /**
     * @var approveCommands[]
     */
    public $approveCommands;

    /**
     * @example E3EF7711-766D-5888-997B-EFBA76809229
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'approveCommands' => 'ApproveCommands',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveCommands) {
            $res['ApproveCommands'] = [];
            if (null !== $this->approveCommands && \is_array($this->approveCommands)) {
                $n = 0;
                foreach ($this->approveCommands as $item) {
                    $res['ApproveCommands'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApproveCommandsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveCommands'])) {
            if (!empty($map['ApproveCommands'])) {
                $model->approveCommands = [];
                $n                      = 0;
                foreach ($map['ApproveCommands'] as $item) {
                    $model->approveCommands[$n++] = null !== $item ? approveCommands::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
