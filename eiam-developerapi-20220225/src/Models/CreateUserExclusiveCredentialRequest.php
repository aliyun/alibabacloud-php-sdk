<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserExclusiveCredentialRequest\credentialContent;

class CreateUserExclusiveCredentialRequest extends Model
{
    /**
     * @var credentialContent
     */
    public $credentialContent;

    /**
     * @var string
     */
    public $credentialIdentifier;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $credentialScenarioLabel;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'credentialContent' => 'credentialContent',
        'credentialIdentifier' => 'credentialIdentifier',
        'credentialName' => 'credentialName',
        'credentialScenarioLabel' => 'credentialScenarioLabel',
        'credentialType' => 'credentialType',
        'description' => 'description',
    ];

    public function validate()
    {
        if (null !== $this->credentialContent) {
            $this->credentialContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialContent) {
            $res['credentialContent'] = null !== $this->credentialContent ? $this->credentialContent->toArray($noStream) : $this->credentialContent;
        }

        if (null !== $this->credentialIdentifier) {
            $res['credentialIdentifier'] = $this->credentialIdentifier;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->credentialScenarioLabel) {
            $res['credentialScenarioLabel'] = $this->credentialScenarioLabel;
        }

        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['credentialContent'])) {
            $model->credentialContent = credentialContent::fromMap($map['credentialContent']);
        }

        if (isset($map['credentialIdentifier'])) {
            $model->credentialIdentifier = $map['credentialIdentifier'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['credentialScenarioLabel'])) {
            $model->credentialScenarioLabel = $map['credentialScenarioLabel'];
        }

        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
