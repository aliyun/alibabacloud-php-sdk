<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class DraftValidationDetail extends Model
{
    /**
     * @var DraftMetaInfoErrorDetail[]
     */
    public $draftMetaInfoErrorDetails;

    /**
     * @var ValidationErrorDetails
     */
    public $sqlErrorDetail;

    /**
     * @var string
     */
    public $sqlValidationResult;
    protected $_name = [
        'draftMetaInfoErrorDetails' => 'draftMetaInfoErrorDetails',
        'sqlErrorDetail' => 'sqlErrorDetail',
        'sqlValidationResult' => 'sqlValidationResult',
    ];

    public function validate()
    {
        if (\is_array($this->draftMetaInfoErrorDetails)) {
            Model::validateArray($this->draftMetaInfoErrorDetails);
        }
        if (null !== $this->sqlErrorDetail) {
            $this->sqlErrorDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->draftMetaInfoErrorDetails) {
            if (\is_array($this->draftMetaInfoErrorDetails)) {
                $res['draftMetaInfoErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->draftMetaInfoErrorDetails as $item1) {
                    $res['draftMetaInfoErrorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sqlErrorDetail) {
            $res['sqlErrorDetail'] = null !== $this->sqlErrorDetail ? $this->sqlErrorDetail->toArray($noStream) : $this->sqlErrorDetail;
        }

        if (null !== $this->sqlValidationResult) {
            $res['sqlValidationResult'] = $this->sqlValidationResult;
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
        if (isset($map['draftMetaInfoErrorDetails'])) {
            if (!empty($map['draftMetaInfoErrorDetails'])) {
                $model->draftMetaInfoErrorDetails = [];
                $n1 = 0;
                foreach ($map['draftMetaInfoErrorDetails'] as $item1) {
                    $model->draftMetaInfoErrorDetails[$n1] = DraftMetaInfoErrorDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sqlErrorDetail'])) {
            $model->sqlErrorDetail = ValidationErrorDetails::fromMap($map['sqlErrorDetail']);
        }

        if (isset($map['sqlValidationResult'])) {
            $model->sqlValidationResult = $map['sqlValidationResult'];
        }

        return $model;
    }
}
