<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\product;

use AlibabaCloud\Dara\Model;

class relations extends Model
{
    /**
     * @var string[]
     */
    public $appCodes;

    /**
     * @var string[]
     */
    public $labelCodes;

    /**
     * @var string[]
     */
    public $relateCodes;

    /**
     * @var string
     */
    public $selfCode;
    protected $_name = [
        'appCodes' => 'AppCodes',
        'labelCodes' => 'LabelCodes',
        'relateCodes' => 'RelateCodes',
        'selfCode' => 'SelfCode',
    ];

    public function validate()
    {
        if (\is_array($this->appCodes)) {
            Model::validateArray($this->appCodes);
        }
        if (\is_array($this->labelCodes)) {
            Model::validateArray($this->labelCodes);
        }
        if (\is_array($this->relateCodes)) {
            Model::validateArray($this->relateCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCodes) {
            if (\is_array($this->appCodes)) {
                $res['AppCodes'] = [];
                $n1 = 0;
                foreach ($this->appCodes as $item1) {
                    $res['AppCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labelCodes) {
            if (\is_array($this->labelCodes)) {
                $res['LabelCodes'] = [];
                $n1 = 0;
                foreach ($this->labelCodes as $item1) {
                    $res['LabelCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relateCodes) {
            if (\is_array($this->relateCodes)) {
                $res['RelateCodes'] = [];
                $n1 = 0;
                foreach ($this->relateCodes as $item1) {
                    $res['RelateCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selfCode) {
            $res['SelfCode'] = $this->selfCode;
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
        if (isset($map['AppCodes'])) {
            if (!empty($map['AppCodes'])) {
                $model->appCodes = [];
                $n1 = 0;
                foreach ($map['AppCodes'] as $item1) {
                    $model->appCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LabelCodes'])) {
            if (!empty($map['LabelCodes'])) {
                $model->labelCodes = [];
                $n1 = 0;
                foreach ($map['LabelCodes'] as $item1) {
                    $model->labelCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RelateCodes'])) {
            if (!empty($map['RelateCodes'])) {
                $model->relateCodes = [];
                $n1 = 0;
                foreach ($map['RelateCodes'] as $item1) {
                    $model->relateCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SelfCode'])) {
            $model->selfCode = $map['SelfCode'];
        }

        return $model;
    }
}
