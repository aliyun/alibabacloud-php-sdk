<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponseBody\data\nodes;

use AlibabaCloud\Dara\Model;

class docNode extends Model
{
    /**
     * @var mixed[]
     */
    public $attachments;

    /**
     * @var int
     */
    public $docId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docSubmitTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $freeOrderApplyCode;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'attachments' => 'attachments',
        'docId' => 'docId',
        'docName' => 'docName',
        'docSubmitTime' => 'docSubmitTime',
        'fileName' => 'fileName',
        'freeOrderApplyCode' => 'freeOrderApplyCode',
        'orderId' => 'orderId',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['attachments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }

        if (null !== $this->docSubmitTime) {
            $res['docSubmitTime'] = $this->docSubmitTime;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->freeOrderApplyCode) {
            $res['freeOrderApplyCode'] = $this->freeOrderApplyCode;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
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
        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['attachments'] as $item1) {
                    $model->attachments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['docName'])) {
            $model->docName = $map['docName'];
        }

        if (isset($map['docSubmitTime'])) {
            $model->docSubmitTime = $map['docSubmitTime'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['freeOrderApplyCode'])) {
            $model->freeOrderApplyCode = $map['freeOrderApplyCode'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        return $model;
    }
}
