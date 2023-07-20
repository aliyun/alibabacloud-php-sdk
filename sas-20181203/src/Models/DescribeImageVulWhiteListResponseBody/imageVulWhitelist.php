<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulWhiteListResponseBody;

use AlibabaCloud\Tea\Model;

class imageVulWhitelist extends Model
{
    /**
     * @example CVE-2019-19906:in_sasl_add_string
     *
     * @var string
     */
    public $aliasName;

    /**
     * @example 34032043
     *
     * @var int
     */
    public $id;

    /**
     * @example scan:AVD-2022-953356
     *
     * @var string
     */
    public $name;

    /**
     * @example already config in another way
     *
     * @var string
     */
    public $reason;

    /**
     * @example {\"type\":\"repo\",\"target\":[\"sas_test/script_0209\",\"sas_test/script\"]}
     *
     * @var string
     */
    public $target;

    /**
     * @example sca
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName' => 'AliasName',
        'id'        => 'Id',
        'name'      => 'Name',
        'reason'    => 'Reason',
        'target'    => 'Target',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageVulWhitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
