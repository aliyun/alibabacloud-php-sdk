<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CompareImageFacesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceShrink;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'projectName' => 'ProjectName',
        'sourceShrink' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sourceShrink) {
            $res['Source'] = $this->sourceShrink;
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
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Source'])) {
            $model->sourceShrink = $map['Source'];
        }

        return $model;
    }
}
