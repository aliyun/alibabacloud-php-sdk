<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessConfigurationRequest extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-00jhtfl8thteu6uj****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The new description of the access configuration.
     *
     * The description can be up to 1,024 characters in length.
     * @example This is an access configuration.
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The new initial web page that is displayed after a CloudSSO user accesses an account in your resource directory by using the access configuration.
     *
     * The web page must be a page of the Alibaba Cloud Management Console.
     * @example https://cloudsso.console.aliyun.com
     *
     * @var string
     */
    public $newRelayState;

    /**
     * @description The new duration of a session in which a CloudSSO user accesses an account in your resource directory by using the access configuration.
     *
     * Valid values: 900 to 43200. The value 900 indicates 15 minutes. The value 43200 indicates 12 hours.
     * @example 3600
     *
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
