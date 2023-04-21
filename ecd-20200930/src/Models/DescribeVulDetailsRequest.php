<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulDetailsRequest extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The natural language of the request and response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the Redhat Package Manager (RPM) package.
     *
     * You can call the [DescribeVulList](~~223907~~) operation to obtain the names of RPM packages.
     * @example 5003243
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   cve: Linux software vulnerability
     *   sys: Windows system vulnerability
     *
     * @example sys
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName' => 'AliasName',
        'lang'      => 'Lang',
        'name'      => 'Name',
        'regionId'  => 'RegionId',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
