<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CreatePolicySetRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policySetName;

    /**
     * @var string
     */
    public $sourcePlatform;
    protected $_name = [
        'description' => 'Description',
        'policySetName' => 'PolicySetName',
        'sourcePlatform' => 'SourcePlatform',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policySetName) {
            $res['PolicySetName'] = $this->policySetName;
        }

        if (null !== $this->sourcePlatform) {
            $res['SourcePlatform'] = $this->sourcePlatform;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PolicySetName'])) {
            $model->policySetName = $map['PolicySetName'];
        }

        if (isset($map['SourcePlatform'])) {
            $model->sourcePlatform = $map['SourcePlatform'];
        }

        return $model;
    }
}
