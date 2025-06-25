<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsResponseBody\approveCommands;

class ListApproveCommandsResponseBody extends Model
{
    /**
     * @var approveCommands[]
     */
    public $approveCommands;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'approveCommands' => 'ApproveCommands',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->approveCommands)) {
            Model::validateArray($this->approveCommands);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveCommands) {
            if (\is_array($this->approveCommands)) {
                $res['ApproveCommands'] = [];
                $n1 = 0;
                foreach ($this->approveCommands as $item1) {
                    $res['ApproveCommands'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveCommands'])) {
            if (!empty($map['ApproveCommands'])) {
                $model->approveCommands = [];
                $n1 = 0;
                foreach ($map['ApproveCommands'] as $item1) {
                    $model->approveCommands[$n1] = approveCommands::fromMap($item1);
                    ++$n1;
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
