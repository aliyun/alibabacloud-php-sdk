<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserProvisioningConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $newDefaultLandingPage;

    /**
     * @var int
     */
    public $newSessionDuration;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'newDefaultLandingPage' => 'NewDefaultLandingPage',
        'newSessionDuration' => 'NewSessionDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->newDefaultLandingPage) {
            $res['NewDefaultLandingPage'] = $this->newDefaultLandingPage;
        }

        if (null !== $this->newSessionDuration) {
            $res['NewSessionDuration'] = $this->newSessionDuration;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['NewDefaultLandingPage'])) {
            $model->newDefaultLandingPage = $map['NewDefaultLandingPage'];
        }

        if (isset($map['NewSessionDuration'])) {
            $model->newSessionDuration = $map['NewSessionDuration'];
        }

        return $model;
    }
}
