<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload\output\item;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload\output\response;

class output extends Model
{
    /**
     * @var item
     */
    public $item;

    /**
     * @var int
     */
    public $outputIndex;

    /**
     * @var response
     */
    public $response;

    /**
     * @var string
     */
    public $sequenceNumber;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'item' => 'Item',
        'outputIndex' => 'OutputIndex',
        'response' => 'Response',
        'sequenceNumber' => 'SequenceNumber',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->item) {
            $this->item->validate();
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = null !== $this->item ? $this->item->toArray($noStream) : $this->item;
        }

        if (null !== $this->outputIndex) {
            $res['OutputIndex'] = $this->outputIndex;
        }

        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->sequenceNumber) {
            $res['SequenceNumber'] = $this->sequenceNumber;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Item'])) {
            $model->item = item::fromMap($map['Item']);
        }

        if (isset($map['OutputIndex'])) {
            $model->outputIndex = $map['OutputIndex'];
        }

        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }

        if (isset($map['SequenceNumber'])) {
            $model->sequenceNumber = $map['SequenceNumber'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
