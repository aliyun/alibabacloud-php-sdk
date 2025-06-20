<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest\approveFlowParam\approveNodes;

class approveFlowParam extends Model
{
    /**
     * @var approveNodes[]
     */
    public $approveNodes;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string
     */
    public $bgVid;

    /**
     * @var int
     */
    public $flowStatus;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'approveNodes' => 'ApproveNodes',
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'bgVid' => 'BgVid',
        'flowStatus' => 'FlowStatus',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->approveNodes)) {
            Model::validateArray($this->approveNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveNodes) {
            if (\is_array($this->approveNodes)) {
                $res['ApproveNodes'] = [];
                $n1 = 0;
                foreach ($this->approveNodes as $item1) {
                    $res['ApproveNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->bgVid) {
            $res['BgVid'] = $this->bgVid;
        }

        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['ApproveNodes'])) {
            if (!empty($map['ApproveNodes'])) {
                $model->approveNodes = [];
                $n1 = 0;
                foreach ($map['ApproveNodes'] as $item1) {
                    $model->approveNodes[$n1] = approveNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['BgVid'])) {
            $model->bgVid = $map['BgVid'];
        }

        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
