<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;

use AlibabaCloud\Tea\Model;

class realVulList extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName' => 'AliasName',
        'name'      => 'Name',
        'necessity' => 'Necessity',
        'type'      => 'Type',
        'uuid'      => 'Uuid',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realVulList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
