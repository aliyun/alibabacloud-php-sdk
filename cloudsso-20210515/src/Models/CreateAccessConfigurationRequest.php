<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessConfigurationRequest extends Model
{
    /**
     * @description The name of the access configuration.
     *
     * The name can be up to 32 characters in length.
     * @example ECS-Admin
     *
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @description The description of the access configuration.
     *
     * The description can be up to 1,024 characters in length.
     * @example This is an access configuration.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The initial web page that is displayed after a CloudSSO user accesses an account in your resource directory by using the access configuration.
     *
     * The web page must be a page of the Alibaba Cloud Management Console. By default, this parameter is empty, which indicates that the initial web page is the homepage of the Alibaba Cloud Management Console.
     * @example https://cloudsso.console.aliyun.com
     *
     * @var string
     */
    public $relayState;

    /**
     * @description The duration of a session in which a CloudSSO user accesses an account in your resource directory by using the access configuration.
     *
     * Default value: 3600. The value indicates 1 hour.
     * @example 3600
     *
     * @var int
     */
    public $sessionDuration;
    protected $_name = [
        'accessConfigurationName' => 'AccessConfigurationName',
        'description'             => 'Description',
        'directoryId'             => 'DirectoryId',
        'relayState'              => 'RelayState',
        'sessionDuration'         => 'SessionDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationName) {
            $res['AccessConfigurationName'] = $this->accessConfigurationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->relayState) {
            $res['RelayState'] = $this->relayState;
        }
        if (null !== $this->sessionDuration) {
            $res['SessionDuration'] = $this->sessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationName'])) {
            $model->accessConfigurationName = $map['AccessConfigurationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['RelayState'])) {
            $model->relayState = $map['RelayState'];
        }
        if (isset($map['SessionDuration'])) {
            $model->sessionDuration = $map['SessionDuration'];
        }

        return $model;
    }
}
