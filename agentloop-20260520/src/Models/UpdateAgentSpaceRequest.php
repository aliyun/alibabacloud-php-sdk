<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class UpdateAgentSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $cmsWorkspace;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'cmsWorkspace' => 'cmsWorkspace',
        'description' => 'description',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmsWorkspace) {
            $res['cmsWorkspace'] = $this->cmsWorkspace;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['cmsWorkspace'])) {
            $model->cmsWorkspace = $map['cmsWorkspace'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
