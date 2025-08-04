<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartAuditResultResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartAuditResultResponseBody\data\errorItemDetails;
use AlibabaCloud\Tea\Model;

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
     * @example SUCCESSED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorItemDetails' => 'ErrorItemDetails',
        'errorMessage' => 'ErrorMessage',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorItemDetails) {
            $res['ErrorItemDetails'] = [];
            if (null !== $this->errorItemDetails && \is_array($this->errorItemDetails)) {
                $n = 0;
                foreach ($this->errorItemDetails as $item) {
                    $res['ErrorItemDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorItemDetails'])) {
            if (!empty($map['ErrorItemDetails'])) {
                $model->errorItemDetails = [];
                $n = 0;
                foreach ($map['ErrorItemDetails'] as $item) {
                    $model->errorItemDetails[$n++] = null !== $item ? errorItemDetails::fromMap($item) : $item;
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
