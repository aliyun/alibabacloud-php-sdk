<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;

class InvokeActionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $actionId;

    /**
     * @var string
     */
    public $actionVersion;

    /**
     * @var string
     */
    public $authConfigShrink;

    /**
     * @var string
     */
    public $bodyShrink;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorVersion;

    /**
     * @var string
     */
    public $headersShrink;

    /**
     * @var string
     */
    public $pathShrink;

    /**
     * @var string
     */
    public $queryShrink;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'actionId' => 'ActionId',
        'actionVersion' => 'ActionVersion',
        'authConfigShrink' => 'AuthConfig',
        'bodyShrink' => 'Body',
        'connectorId' => 'ConnectorId',
        'connectorVersion' => 'ConnectorVersion',
        'headersShrink' => 'Headers',
        'pathShrink' => 'Path',
        'queryShrink' => 'Query',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }

        if (null !== $this->actionVersion) {
            $res['ActionVersion'] = $this->actionVersion;
        }

        if (null !== $this->authConfigShrink) {
            $res['AuthConfig'] = $this->authConfigShrink;
        }

        if (null !== $this->bodyShrink) {
            $res['Body'] = $this->bodyShrink;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->connectorVersion) {
            $res['ConnectorVersion'] = $this->connectorVersion;
        }

        if (null !== $this->headersShrink) {
            $res['Headers'] = $this->headersShrink;
        }

        if (null !== $this->pathShrink) {
            $res['Path'] = $this->pathShrink;
        }

        if (null !== $this->queryShrink) {
            $res['Query'] = $this->queryShrink;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }

        if (isset($map['ActionVersion'])) {
            $model->actionVersion = $map['ActionVersion'];
        }

        if (isset($map['AuthConfig'])) {
            $model->authConfigShrink = $map['AuthConfig'];
        }

        if (isset($map['Body'])) {
            $model->bodyShrink = $map['Body'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['ConnectorVersion'])) {
            $model->connectorVersion = $map['ConnectorVersion'];
        }

        if (isset($map['Headers'])) {
            $model->headersShrink = $map['Headers'];
        }

        if (isset($map['Path'])) {
            $model->pathShrink = $map['Path'];
        }

        if (isset($map['Query'])) {
            $model->queryShrink = $map['Query'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
