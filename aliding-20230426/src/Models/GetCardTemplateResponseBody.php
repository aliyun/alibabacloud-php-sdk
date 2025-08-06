<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCardTemplateResponseBody\commonVariableList;

class GetCardTemplateResponseBody extends Model
{
    /**
     * @var commonVariableList[]
     */
    public $commonVariableList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'commonVariableList' => 'commonVariableList',
        'requestId' => 'requestId',
        'status' => 'status',
        'templateId' => 'templateId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->commonVariableList)) {
            Model::validateArray($this->commonVariableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonVariableList) {
            if (\is_array($this->commonVariableList)) {
                $res['commonVariableList'] = [];
                $n1 = 0;
                foreach ($this->commonVariableList as $item1) {
                    $res['commonVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['commonVariableList'])) {
            if (!empty($map['commonVariableList'])) {
                $model->commonVariableList = [];
                $n1 = 0;
                foreach ($map['commonVariableList'] as $item1) {
                    $model->commonVariableList[$n1] = commonVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
