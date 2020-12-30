<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details\items;

use AlibabaCloud\Tea\Model;

class CN extends Model
{
    /**
     * @var string[]
     */
    public $advice;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemLevel;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string[]
     */
    public $details;
    protected $_name = [
        'advice'    => 'Advice',
        'itemName'  => 'ItemName',
        'itemLevel' => 'ItemLevel',
        'itemType'  => 'ItemType',
        'details'   => 'Details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->itemLevel) {
            $res['ItemLevel'] = $this->itemLevel;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CN
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = $map['Advice'];
            }
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ItemLevel'])) {
            $model->itemLevel = $map['ItemLevel'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = $map['Details'];
            }
        }

        return $model;
    }
}
