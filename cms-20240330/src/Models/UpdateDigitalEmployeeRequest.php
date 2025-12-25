<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeRequest\knowledges;

class UpdateDigitalEmployeeRequest extends Model
{
    /**
     * @var string
     */
    public $defaultRule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var knowledges
     */
    public $knowledges;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'defaultRule' => 'defaultRule',
        'description' => 'description',
        'displayName' => 'displayName',
        'knowledges' => 'knowledges',
        'roleArn' => 'roleArn',
    ];

    public function validate()
    {
        if (null !== $this->knowledges) {
            $this->knowledges->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultRule) {
            $res['defaultRule'] = $this->defaultRule;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->knowledges) {
            $res['knowledges'] = null !== $this->knowledges ? $this->knowledges->toArray($noStream) : $this->knowledges;
        }

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
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
        if (isset($map['defaultRule'])) {
            $model->defaultRule = $map['defaultRule'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['knowledges'])) {
            $model->knowledges = knowledges::fromMap($map['knowledges']);
        }

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        return $model;
    }
}
