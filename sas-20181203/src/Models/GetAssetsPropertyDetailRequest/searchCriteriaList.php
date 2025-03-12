<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailRequest;

use AlibabaCloud\Tea\Model;

class searchCriteriaList extends Model
{
    /**
     * @description The name of the condition. Valid values:
     *
     *   **remarkItemName**: the aggregation item of the asset fingerprints. Fuzzy match is supported.
     *
     * > *   If **Biz** is set to **web_server**, **remarkItemName** specifies a domain name.
     * > *   If **Biz** is set to **lkm**, **remarkItemName** specifies a module name.
     * > *   If **Biz** is set to **autorun**, **remarkItemName** specifies the path to a startup item.
     * @example remarkItemName
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the condition.
     *
     * @example virtio
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchCriteriaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
