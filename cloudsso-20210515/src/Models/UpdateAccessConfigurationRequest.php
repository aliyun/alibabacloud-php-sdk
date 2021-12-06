<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $newRelayState;

    /**
     * @var int
     */
    public $newSessionDuration;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'directoryId'           => 'DirectoryId',
        'newDescription'        => 'NewDescription',
        'newRelayState'         => 'NewRelayState',
        'newSessionDuration'    => 'NewSessionDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->newRelayState) {
            $res['NewRelayState'] = $this->newRelayState;
        }
        if (null !== $this->newSessionDuration) {
            $res['NewSessionDuration'] = $this->newSessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccessConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['NewRelayState'])) {
            $model->newRelayState = $map['NewRelayState'];
        }
        if (isset($map['NewSessionDuration'])) {
            $model->newSessionDuration = $map['NewSessionDuration'];
        }

        return $model;
    }
}
