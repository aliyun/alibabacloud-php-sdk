<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkRuleRequest extends Model
{
    /**
     * @description The description.
     *
     * @example networkrule description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the access control rule.
     *
     * @example networkrule_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The private IP address or private CIDR block. Separate multiple items with commas (,).
     *
     * @example ["192.10.XX.XX","192.168.XX.XX/24"]
     *
     * @var string
     */
    public $sourcePrivateIp;

    /**
     * @description The network type.
     *
     * Only private IP addresses are supported. Set the value to Private.
     * @example Private
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'     => 'Description',
        'name'            => 'Name',
        'sourcePrivateIp' => 'SourcePrivateIp',
        'type'            => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkRuleRequest
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
