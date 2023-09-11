<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateNetworkRuleRequest extends Model
{
    /**
     * @example Creat by kst-hzz62ee817bvyyr5****
     *
     * @var string
     */
    public $description;

    /**
     * @example networkrule_test
     *
     * @var string
     */
    public $name;

    /**
     * @example ["192.10.XX.XX","192.168.XX.XX/24"]
     *
     * @var string
     */
    public $sourcePrivateIp;
    protected $_name = [
        'description'     => 'Description',
        'name'            => 'Name',
        'sourcePrivateIp' => 'SourcePrivateIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourcePrivateIp) {
            $res['SourcePrivateIp'] = $this->sourcePrivateIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNetworkRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourcePrivateIp'])) {
            $model->sourcePrivateIp = $map['SourcePrivateIp'];
        }

        return $model;
    }
}
