<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAsrResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAsrResponseBody\data\recordFileText1In;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAsrResponseBody\data\recordFileText1Out;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAsrResponseBody\data\result;

class data extends Model
{
    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $recordFileCount;

    /**
     * @var recordFileText1In
     */
    public $recordFileText1In;

    /**
     * @var recordFileText1Out
     */
    public $recordFileText1Out;

    /**
     * @var result[]
     */
    public $result;
    protected $_name = [
        'enterpriseId' => 'EnterpriseId',
        'monitorType' => 'MonitorType',
        'recordFileCount' => 'RecordFileCount',
        'recordFileText1In' => 'RecordFileText1In',
        'recordFileText1Out' => 'RecordFileText1Out',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->recordFileText1In) {
            $this->recordFileText1In->validate();
        }
        if (null !== $this->recordFileText1Out) {
            $this->recordFileText1Out->validate();
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }

        if (null !== $this->recordFileCount) {
            $res['RecordFileCount'] = $this->recordFileCount;
        }

        if (null !== $this->recordFileText1In) {
            $res['RecordFileText1In'] = null !== $this->recordFileText1In ? $this->recordFileText1In->toArray($noStream) : $this->recordFileText1In;
        }

        if (null !== $this->recordFileText1Out) {
            $res['RecordFileText1Out'] = null !== $this->recordFileText1Out ? $this->recordFileText1Out->toArray($noStream) : $this->recordFileText1Out;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }

        if (isset($map['RecordFileCount'])) {
            $model->recordFileCount = $map['RecordFileCount'];
        }

        if (isset($map['RecordFileText1In'])) {
            $model->recordFileText1In = recordFileText1In::fromMap($map['RecordFileText1In']);
        }

        if (isset($map['RecordFileText1Out'])) {
            $model->recordFileText1Out = recordFileText1Out::fromMap($map['RecordFileText1Out']);
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1] = result::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
