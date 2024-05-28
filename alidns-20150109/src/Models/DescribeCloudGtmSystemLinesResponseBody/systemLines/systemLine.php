<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody\systemLines;

use AlibabaCloud\Tea\Model;

class systemLine extends Model
{
    /**
     * @example aliyun_r_ap-south-1
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @var string
     */
    public $name;

    /**
     * @example String	aliyun
     *
     * @var string
     */
    public $parentCode;
    protected $_name = [
        'code'        => 'Code',
        'displayName' => 'DisplayName',
        'isAvailable' => 'IsAvailable',
        'name'        => 'Name',
        'parentCode'  => 'ParentCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }

        return $model;
    }
}
