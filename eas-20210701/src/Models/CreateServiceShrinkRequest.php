<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $develop;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $labelsShrink;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'develop' => 'Develop',
        'dryRun' => 'DryRun',
        'labelsShrink' => 'Labels',
        'workspaceId' => 'WorkspaceId',
        'body' => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->develop) {
            $res['Develop'] = $this->develop;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->labelsShrink) {
            $res['Labels'] = $this->labelsShrink;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->body) {
            $res['body'] = $this->body;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Develop'])) {
            $model->develop = $map['Develop'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Labels'])) {
            $model->labelsShrink = $map['Labels'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
