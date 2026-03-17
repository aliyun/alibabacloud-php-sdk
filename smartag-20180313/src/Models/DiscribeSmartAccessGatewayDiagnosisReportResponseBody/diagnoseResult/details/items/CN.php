<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details\items;

use AlibabaCloud\Dara\Model;

class CN extends Model
{
    /**
     * @var string[]
     */
    public $advice;

    /**
     * @var string[]
     */
    public $details;

    /**
     * @var string
     */
    public $itemLevel;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemType;
    protected $_name = [
        'advice' => 'Advice',
        'details' => 'Details',
        'itemLevel' => 'ItemLevel',
        'itemName' => 'ItemName',
        'itemType' => 'ItemType',
    ];

    public function validate()
    {
        if (\is_array($this->advice)) {
            Model::validateArray($this->advice);
        }
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advice) {
            if (\is_array($this->advice)) {
                $res['Advice'] = [];
                $n1 = 0;
                foreach ($this->advice as $item1) {
                    $res['Advice'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemLevel) {
            $res['ItemLevel'] = $this->itemLevel;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
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
        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = [];
                $n1 = 0;
                foreach ($map['Advice'] as $item1) {
                    $model->advice[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemLevel'])) {
            $model->itemLevel = $map['ItemLevel'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }

        return $model;
    }
}
