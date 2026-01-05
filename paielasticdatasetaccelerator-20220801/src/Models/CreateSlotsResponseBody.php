<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class CreateSlotsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slotIds;

    /**
     * @var string[]
     */
    public $summary;
    protected $_name = [
        'requestId' => 'RequestId',
        'slotIds' => 'SlotIds',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slotIds) {
            $res['SlotIds'] = $this->slotIds;
        }

        if (null !== $this->summary) {
            if (\is_array($this->summary)) {
                $res['Summary'] = [];
                foreach ($this->summary as $key1 => $value1) {
                    $res['Summary'][$key1] = $value1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlotIds'])) {
            $model->slotIds = $map['SlotIds'];
        }

        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                foreach ($map['Summary'] as $key1 => $value1) {
                    $model->summary[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
