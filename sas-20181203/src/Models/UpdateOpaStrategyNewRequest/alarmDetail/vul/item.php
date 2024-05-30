<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\alarmDetail\vul;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The ID of the vulnerability.
     *
     * >  You can call the [DescribeVulListPage](https://help.aliyun.com/document_detail/471928.html) operation to query the ID.
     * @example CVE-2023-36034
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the vulnerability.
     *
     * >  You can call the [DescribeVulListPage](https://help.aliyun.com/document_detail/471928.html) operation to query the name.
     * @example oval:com.redhat.rhsa:def:20227002
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
