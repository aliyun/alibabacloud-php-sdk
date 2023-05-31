<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The ID of the defense rule.
     *
     * @example 215779601
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the defense rule.
     *
     * @example TestRule
     *
     * @var string
     */
    public $name;

    /**
     * @description The UUID of the server to which the defense rule is applied.
     *
     * @example 4fe8e1cd-3c37-4851-b9de-124da32c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
        'uuid' => 'Uuid',
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
