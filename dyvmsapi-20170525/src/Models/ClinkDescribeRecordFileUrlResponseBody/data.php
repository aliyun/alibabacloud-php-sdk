<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeRecordFileUrlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeRecordFileUrlResponseBody\data\audioFlows;

class data extends Model
{
    /**
     * @var audioFlows[]
     */
    public $audioFlows;

    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var string
     */
    public $recordFileUrl;
    protected $_name = [
        'audioFlows' => 'AudioFlows',
        'clinkRequestId' => 'ClinkRequestId',
        'recordFileUrl' => 'RecordFileUrl',
    ];

    public function validate()
    {
        if (\is_array($this->audioFlows)) {
            Model::validateArray($this->audioFlows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFlows) {
            if (\is_array($this->audioFlows)) {
                $res['AudioFlows'] = [];
                $n1 = 0;
                foreach ($this->audioFlows as $item1) {
                    $res['AudioFlows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->recordFileUrl) {
            $res['RecordFileUrl'] = $this->recordFileUrl;
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
        if (isset($map['AudioFlows'])) {
            if (!empty($map['AudioFlows'])) {
                $model->audioFlows = [];
                $n1 = 0;
                foreach ($map['AudioFlows'] as $item1) {
                    $model->audioFlows[$n1] = audioFlows::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['RecordFileUrl'])) {
            $model->recordFileUrl = $map['RecordFileUrl'];
        }

        return $model;
    }
}
