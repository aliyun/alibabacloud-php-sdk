<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartAuditResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartAuditResultResponseBody\data\errorItemDetails;

class data extends Model
{
    /**
     * @var errorItemDetails[]
     */
    public $errorItemDetails;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorItemDetails' => 'ErrorItemDetails',
        'errorMessage' => 'ErrorMessage',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->errorItemDetails)) {
            Model::validateArray($this->errorItemDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorItemDetails) {
            if (\is_array($this->errorItemDetails)) {
                $res['ErrorItemDetails'] = [];
                $n1 = 0;
                foreach ($this->errorItemDetails as $item1) {
                    $res['ErrorItemDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrorItemDetails'])) {
            if (!empty($map['ErrorItemDetails'])) {
                $model->errorItemDetails = [];
                $n1 = 0;
                foreach ($map['ErrorItemDetails'] as $item1) {
                    $model->errorItemDetails[$n1] = errorItemDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
