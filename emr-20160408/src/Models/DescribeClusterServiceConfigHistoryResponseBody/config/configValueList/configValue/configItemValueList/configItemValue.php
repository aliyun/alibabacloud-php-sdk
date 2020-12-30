<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList\configValue\configItemValueList;

use AlibabaCloud\Tea\Model;

class configItemValue extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $changeType;
    protected $_name = [
        'value'      => 'Value',
        'oldValue'   => 'OldValue',
        'itemName'   => 'ItemName',
        'changeType' => 'ChangeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configItemValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        return $model;
    }
}
